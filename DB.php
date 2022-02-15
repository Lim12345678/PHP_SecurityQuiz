<?php

class DB
{
    private $user = "root";
    private $pw = "1234";
    private $option = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO("mysql:host = localhost; dbname=security", $this->user, $this->pw, $this->option);
            $this->db->exec("set names UTF8");
//            echo "데이터베이스 연결 성공";
        } catch(PDOException $e) {
//            echo "데이터베이스 연결 실패";
            return $e;
        }
    }

    public function getDB() {
        return $this->db;
    }
}