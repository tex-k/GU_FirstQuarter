<?php

namespace app\controllers;

abstract class Controller {
    
    protected $renderer;
    
    public function __construct() {
        $this->renderer = new \app\services\Renderer();
    }

    public function run($action = null, $param = null) {
        $method = 'action' . ucfirst($action);

        if (method_exists($this, $method)) {
            $this->$method($param);
        } else {
            $this->actionIndex($param);
        }
    }

    protected function actionIndex() {
        echo '???';
    }
    
    protected function render($templ, $layout, $product = null, $param = null) {
        if ($layout) {
            $this->renderer->render($templ, $layout, $product, $param);
        } else {
            return $this->renderer->render($templ, $layout, $product, $param);
        }
        
    }
    
    protected function redirect($url) {
        header("Location: $url");
    }

}

?>