<?php

namespace App\Database;

use Google\Cloud\Firestore\FirestoreClient;

class FirestoreDB{
    private $firestore;

    public function __construct () {
        $json_cred = base_path().'/MembersDB-82766a5c9abb.json';

        $this-> firestore = new FirestoreClient ( [
            'keyFilePath' => $json_cred
        ]);
    }

    public function get_document_by_id(string $collection_name, string $id) {
        $collection = $this -> firestore -> collection($collection_name)->document($id);
        
        $path = '\''. $collection_name . '/' . $id .'\'';
        $snapshot = $collection->snapshot();

        if ($snapshot->exists()) {
            $document = $snapshot->fields();
        } else {
            printf('Document %s does not exist!' . PHP_EOL, $snapshot->id());
        }

        return $document;
    }

    public function get_document(string $collection_name, Array $criteria) {

        $collection = $this -> firestore -> collection($collection_name);
        if (!empty($criteria)) {
            $query = $collection -> where($criteria[0], $criteria[1], $criteria[2]);

            return $query -> documents();
        }
        return $collection -> documents();
    
        // can be an array of documents
    }

    public function get_all_documents(string $collection_name){
        $collection = $this -> firestore -> collection($collection_name);
        return  $collection->documents();
    }

    public function createDocument(string $collection, Array $contents) {

        $collection = $this -> firestore -> collection ($collection);

        $details = $collection->add($contents);
        return true;
    }
}