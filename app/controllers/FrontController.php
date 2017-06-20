<?php

namespace app\controllers;

class FrontController extends Controller {

    protected function actionIndex() {

        if ($_SERVER['REQUEST_URI'] == '/app/www/') {
            (new MainpageController())->run();
//            (new ProdpageController())->run();
        } else {            
            $controller = 'app\controllers\\' . ucfirst($_GET['c']) . 'Controller';
            $action = $_GET['a'];
            $param = $_GET['p'];

            (new $controller)->run($action, $param);
        }
    }

}

?>