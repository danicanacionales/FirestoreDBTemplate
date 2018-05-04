<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Database\FirestoreDB;

class User extends Authenticatable
{
    private $conn;
    private $email;
    private $password;

    protected $rememberTokenName = 'remember_token';

    public function __construct(){
        $this->conn = new FirestoreDB();
    }

    public function fetch_user_creds(Array $credentials){
        $document = "members";
        $creds = ['email', '=', $credentials['email']];
        $user_array = $this->conn->get_document($document, $creds);

        if($user_array){
            foreach($user_array as $user){
                $this->email = $user['email'];
                $this->password = $user['password'];
            }
        }else{
            return false;
        }

        return $this;
    }

    public function getAuthIdentifierName() {
        return 'email';
    }

    public function getAuthIdentifier() {
        return $this->email;
    }

    public function getAuthPassword() {
        // should return the hashed password
        return $this->password;
    }

    public function getRememberToken() {
        return $this -> remember_token_name;
    }

    public function setRememberToken($value) {
        $this -> remember_token_name = $value;
    }

    public function getRememberTokenName() {
        
    }
}
