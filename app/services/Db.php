<?php

namespace app\services;

use \PDO;
use \app\traits\Singleton;

class Db {

    use Singleton;

    protected $conn;
    protected $conf = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'gb',
        'user' => 'root',
        'password' => ''
    ];

    /** Создаёт строку DSN*/
    protected function getDSN() {
        return sprintf(
                "%s:host=%s;dbname=%s;charset=UTF8",
                $this->conf['driver'], $this->conf['host'],
                $this->conf['dbname']
        );
    }

    /** Создаёт соединение с БД*/
    protected function getConn() {

        if (is_null($this->conn)) {
            $this->conn = new PDO(
                    $this->getDSN(),
                    $this->conf['user'],
                    $this->conf['password']
            );

            $this->conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_CLASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->conn;
    }

    /** Создаёт запрос*/
    public function query($sql, $params) {
        $smtp = $this->getConn()->prepare($sql);
        $smtp->execute($params);

        return $smtp;
    }

    /** Возвращает объект с заполненными из БД св-ми*/
    public function fetchObjct($sql, $params, $model) {
        return $this->query($sql, $params)->fetchObject($model);
    }
    
    /** Возвращает количество записей из выбранной таблицы */
    public function entryAmount($table) {
        $sql = "SELECT COUNT(*) FROM " . $table;
        return $this->getConn()->query($sql)->fetchColumn();
    }
    
    public function amountProdByUserID($user_id) {
        $sql = "SELECT COUNT(*) FROM cart WHERE user_id = $user_id";
        
        return $this->getConn()->query($sql)->fetchColumn();
    }

    public function writeData($sql) {
        $this->getConn()->query($sql);
    }
    
}

?>