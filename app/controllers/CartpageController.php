<?php

namespace app\controllers;

use \app\models\User;
use \app\models\Session;
use \app\models\Product;

class CartpageController extends Controller {

    function actionIndex() {

        (new AuthController())->checkUser();

        $product = '';
        $totalPrice = 0;

        for ($id = 1; $id <= User::getAmountProducts(); $id++) {

            if (User::getFromCart($id)->user_id == Session::getUserID($_SESSION["sid"])) {
                $array = $this->render('product_cart.php', false, User::getProduct($id), $totalPrice);
                $product .= $array[0];
                $totalPrice += $array[1];
//                $product .= $this->render('product_cart.php', false, User::getProduct($id));
            }
        }

        $this->render('cartpage.php', true, $product, $totalPrice);
    }

    function actionAdd($prod_id) {

        (new AuthController())->checkUser();

        $object = User::isInCart(Session::getUserID($_SESSION["sid"]), $prod_id);

        if ($object) {
            Product::addProd($object->id, $object->amount);
        } else {
            Product::writeProd($prod_id);
        }

        $this->redirect('../www/?c=cartpage&a&p');
    }

    function actionDel($prod_id) {

        (new AuthController())->checkUser();

        $object = User::isInCart(Session::getUserID($_SESSION["sid"]), $prod_id);

        if ($object->amount > 1) {
            Product::reduceProd($object->id, $object->amount);
        } else {
            Product::delProduct($object->id);
        }

        $this->redirect('../www/?c=cartpage&a&p');
    }

    function actionClear() {

        (new AuthController())->checkUser();
        
//        $amount = User::getAmountProducts();

        for ($id = 1; $id <= User::getAmountProducts(); $id++) {

            if (User::getFromCart($id)->user_id == Session::getUserID($_SESSION["sid"])) {
                Product::delProduct($id);
                $id--;
            }            
        }
//        User::clearProducts($_SESSION["sid"]);

        $this->redirect('../www/?c=cartpage&a&p');
    }

}

?>