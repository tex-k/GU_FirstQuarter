<?php

namespace app\models;

use \app\services\Db;
//use \PDO;

class Session {

    protected $sid;
    protected $user_id;

    /** Устанавливает соединение с базой данных */
    protected static function getConn() {
        return Db::getInstance();
    }

    public static function createNew($id, $userId) {
        static::getConn()->writeData("INSERT INTO sessions (sid, user_id) VALUES ($id, $userId)");
    }
    
    public static function getUserID($id) {
        $sql = "SELECT * FROM sessions WHERE sid = :id";

        $params = [
            "id" => $id
        ];

        return static::getConn()->fetchObjct($sql, $params, new Session)->user_id;
    }
    
    public function __toString() {
        return 'app\models\Session';
    }
    
    public static function delSession($id) {
        $sql = "DELETE FROM sessions WHERE sid = $id";
        
        static::getConn()->writeData($sql);
    }

}

?>