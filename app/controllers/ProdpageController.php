<?php

namespace app\controllers;

use \app\models\Product;

class ProdpageController extends Controller {

    protected function actionIndex($prod_id) {       

        $this->render('productpage.php', true, Product::getByID($prod_id));
    }

}

?>