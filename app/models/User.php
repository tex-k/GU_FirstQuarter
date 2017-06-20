<?php

namespace app\models;

use \app\services\Db;

class User {

    protected $login;
    protected $id;
    private $password;

    public static function getCurrent() {
//        session_start();
        $sid = $_SESSION['sid'];
//        var_dump($sid);
        if ($sid) {
            return TRUE;
        }
        return false;
    }

    /** Устанавливает соединение с базой данных */
    protected static function getConn() {
        return Db::getInstance();
    }

    /** Создаёт объект пользователя, заполненный из бызы данных, по id */
    public static function getByID($id) {
        $sql = "SELECT * FROM users WHERE id = :id";

        $params = [
            'id' => $id
        ];

        return static::getConn()->fetchObjct($sql, $params, new User);
    }

    /** Создаёт объект пользователя, заполненный из базы данных, по логину и паролю */
    public static function getByLogPass($login, $password) {
        $sql = "SELECT * FROM users WHERE login = :login AND password = :password";

        $params = [
            'login' => $login,
            'password' => $password
        ];

        return static::getConn()->fetchObjct($sql, $params, new User);
    }

    /** Возвращает товар из корзины данного пользователя по id */
    public static function getFromCart($id) {
        $sql = "SELECT * FROM cart WHERE id = :id";

        $params = [
            'id' => $id
        ];

        return static::getConn()->fetchObjct($sql, $params, new Model);
    }

    /** Возвращает количество товаров в корзинет данного пользователя */
    public static function getAmountProducts() {
        $table = "cart";

        return static::getConn()->entryAmount($table);
    }
    
    public static function getProductByUserID($userId) {
        $sql_1 = "SELECT * FROM cart WHERE user_id = :id";

        $params_1 = [
            'id' => $userId
        ];

        $product_id = static::getConn()->fetchObjct($sql_1, $params_1, new Model)->product_id;
                        
        $sql_2 = "SELECT * FROM products WHERE id = :id";
        
        $params_2 = [
            'id' => $product_id
        ];
        
        $product = static::getConn()->fetchObjct($sql_2, $params_2, new Product);
        $product->setAmountPr(static::getConn()->fetchObjct($sql_1, $params_1, new Model)->amount);
        return $product;
    }
    
    /** Возвращает товар из корзины по id корзины */
    public static function getProduct($id) {
        $sql_1 = "SELECT * FROM cart WHERE id = :id";

        $params_1 = [
            'id' => $id
        ];

        $product_id = static::getConn()->fetchObjct($sql_1, $params_1, new Model)->product_id;
                        
        $sql_2 = "SELECT * FROM products WHERE id = :id";
        
        $params_2 = [
            'id' => $product_id
        ];
        
        $product = static::getConn()->fetchObjct($sql_2, $params_2, new Product);
        $product->setAmountPr(static::getConn()->fetchObjct($sql_1, $params_1, new Model)->amount);
        return $product;
    }
    
    public static function isInCart($user_id, $prod_id) {
        $sql = "SELECT * FROM cart WHERE user_id = :id_1 AND product_id = :id_2";

        $params = [
            'id_1' => $user_id,
            'id_2' => $prod_id
        ];

        return static::getConn()->fetchObjct($sql, $params, new Model);
    }
    
//    public static function clearProducts($user_id) {
////        $sql = "DELETE FROM cart WHERE user_id = $user_id";
////        
////        static::getConn()->writeData($sql);
//        
//        
//    }

    public function __toString() {
        return 'app\models\User';
    }

    public function getName() {
        return $this->login;
    }

    public function getID() {
        return $this->id;
    }

    public function getPassword() {
        return $this->password;
    }

}

?>