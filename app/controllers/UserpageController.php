<?php

namespace app\controllers;

use \app\models\User;
use \app\models\Session;

class UserpageController extends Controller {

    function actionIndex() {
        
        (new AuthController())->checkUser();
        
//        $id = 1;
//        $login = 'Aleksey';
//        $password = '5555';
//        session_start();
        
//        $a = $_SESSION["sid"];
//        var_dump($_SESSION["sid"]);exit;
        
        $this->render('userpage.php', true, User::getByID(Session::getUserID($_SESSION["sid"])));
    }

}

?>