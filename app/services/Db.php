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

    /** ������ ������ DSN*/
    protected function getDSN() {
        return sprintf(
                "%s:host=%s;dbname=%s;charset=UTF8",
                $this->conf['driver'], $this->conf['host'],
                $this->conf['dbname']
        );
    }

    /** ������ ���������� � ��*/
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

    /** ������ ������*/
    public function query($sql, $params) {
        $smtp = $this->getConn()->prepare($sql);
        $smtp->execute($params);

        return $smtp;
    }

    /** ���������� ������ � ������������ �� �� ��-��*/
    public function fetchObjct($sql, $params, $model) {
        return $this->query($sql, $params)->fetchObject($model);
    }
    
    /** ���������� ���������� ������� �� ��������� ������� */
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