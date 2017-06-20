<?php

namespace app\services;

class Renderer {
    
    protected $template = 'views';

    public function render($templ, $layout, $object, $param = null) {
                
        ob_start();
        include ROOT_DIR . '/' . $this->template . '/' . $templ;              
        $content = ob_get_clean();
        
        if (isset($price)) {            
            $param = $price;            
        }  

        if ($layout) {
//            var_dump($param);exit();
            include ROOT_DIR . '/' . $this->template . '/layout.php';
        } else {            
            return [$content, $param];
        }        
    }

}

?>