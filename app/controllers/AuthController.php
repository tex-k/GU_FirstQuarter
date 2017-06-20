<?php

namespace app\controllers;

use app\Models\User;
use app\services\Auth;
use app\models\Session;

class AuthController extends Controller {

    public function checkUser() {

        session_start();

        if (!User::getCurrent()) {
            $this->redirect('../www/?c=authpage&a&p');
        }
    }

    public function checkLogin() {
        if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['login']))) {

            $user = (new Auth())->login($_POST['login'], $_POST['password']);

            if ($user) {
//                $a = date("Y-m-d H:i:d");
//                Session::createNew(1, $user->getID(), "'$a'");
                $sid = $this->generateStr();
//                $sid = "a";
                Session::createNew("'$sid'", $user->getID());

                session_start();

                $_SESSION['sid'] = $sid;

                $this->redirect('../www/?c=userpage&a&p');
            }
        }
    }

    protected function generateStr($length = 8) {
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
        $numChars = strlen($chars);
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($chars, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }

}

?>