<?php

namespace app\controllers;

use \app\models\Session;

class AuthpageController extends Controller {

    function actionIndex() {
        (new AuthController)->checkLogin();
        
        $this->render('form.php', true);
    }
    
    function actionOut() {
        session_start();
        
        $a = $_SESSION["sid"];
        
        Session::delSession("'$a'");
        
        $_SESSION["sid"] = null;
        
        $this->redirect("../www/?c=authpage&a&p");
    }

}

?>