<?php

namespace app\controllers;

use \app\models\Product;

class ProductController extends Controller {

    protected function actionCard() {
        
        $id = $_GET['id'];       
        
        $this->render('card.php', Product::getByID($id));
    }
    
}

?>