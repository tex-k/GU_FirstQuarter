<?php

namespace app\models;

use \app\services\Db;
use \app\models\Session;

class Product {

    protected $id;
    protected $name;
    protected $price;
    protected $color;
    protected $size;
    protected $amount;

    /** Устанавливает соединение с базой данных    */
    protected static function getConn() {
        return Db::getInstance();
    }

    /** Создаёт объект товара, заполненный из бызы данных, по id */
    public static function getByID($id) {
        $sql = "SELECT * FROM Products WHERE id = :id";

        $params = [
            'id' => $id
        ];

        return static::getConn()->fetchObjct($sql, $params, new Product);
    }

    /** Возвращает количество товаров */
    public static function getAmount() {
        $table = "Products";

        return static::getConn()->entryAmount($table);
    }

    public static function getAmountByUser($user_id) {
        return static::getConn()->amountProdByUserID($user_id);
    }

    /** Записывает новую строчку в корзину */
    public static function writeProd($prod_id) {
        $amount = static::getConn()->entryAmount("cart");
        $amount++;

        $user_id = Session::getUserID($_SESSION["sid"]);

        static::getConn()->writeData("INSERT INTO cart (id, user_id, product_id, amount) VALUES ($amount, $user_id, $prod_id, 1)");
    }

    /** Увеличивает количество товаров на 1 в имеющейся записи */
    public static function addProd($id, $amount) {
        $amount++;

        $sql = "UPDATE cart SET amount = $amount WHERE id = $id";

        static::getConn()->writeData($sql);
    }

    /** Уменьшает количество товаров на 1 в имеющейся записи */
    public static function reduceProd($id, $amount) {
        $amount--;

        $sql = "UPDATE cart SET amount = $amount WHERE id = $id";

        static::getConn()->writeData($sql);
    }

    /** Удаляет запись из корзины и переопределяет id следующих записей */
    public static function delProduct($id) {

        static::getConn()->writeData("DELETE FROM cart WHERE id = $id");

        $next_id = $id + 1;

        $sql = "SELECT * FROM cart WHERE id = :id";

        $params = [
            'id' => $next_id
        ];

        $object = static::getConn()->fetchObjct($sql, $params, new Model);

        while ($object) {

            static::getConn()->writeData("UPDATE cart SET id = $id WHERE id = $next_id");

            $id++;
            $next_id++;

            $params = [
                'id' => $next_id
            ];
            
            $object = static::getConn()->fetchObjct($sql, $params, new Model);
        }
    }

    public function __toString() {
        return 'app\models\Product';
    }

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getColor() {
        return $this->color;
    }

    public function getSize() {
        return $this->size;
    }

    public function getAmountPr() {
        return $this->amount;
    }

    public function setAmountPr($amount) {
        $this->amount = $amount;
    }

}

?>