<?php

namespace app\services;

use \app\models\User;

class Auth {

    public function login($login, $password){
        $user = User::getByLogPass($login, $password);
        
        if ($user) {
            return $user;
        }
        
        return FALSE;
    }

}
?>