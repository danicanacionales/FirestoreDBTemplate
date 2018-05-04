<?php
    
namespace App\Includes;
use App\Database\FirestoreDB;

/*
*   This is a custom class that holds functions that are 
*   commonly used by multiple controllers
*
*/

class FunctionsClass
{
    public function ReturnUserDetails(){
        $firestore = new FirestoreDB();

        $user = $firestore -> get_document('members', ['email', '=', session() -> get('email')]);
        $user_details = [];

        foreach ($user as $details) {
            $user_details = [
                    'email' => $details['email'],
                    'firstName' => $details['firstName'],
                    'lastName' => $details['lastName']
                ];
        }

        return $user_details;
    }
}