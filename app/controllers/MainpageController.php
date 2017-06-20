<?php

namespace app\controllers;

use \app\models\Product;

class MainpageController extends Controller {

    protected function actionIndex() {

        $product = '';

        for ($i = 1; $i <= Product::getAmount(); $i++) {
            
            $id = $i;

            $product .= $this->render('product.php', false, Product::getByID($id))[0];
        }

        $this->render('mainpage.php', true, $product);
    }

}

?>