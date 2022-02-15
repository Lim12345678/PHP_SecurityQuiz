<?php
require_once ("DB.php");
class Security
{
    private $db;

    public function __construct()
    {
        $db = new DB();
        $this->db = $db->getDB();
    }

    //member 출력
    public function getMemberList() {
        try {
            $stmt = $this->db->prepare("select * from members order by score desc, time limit 10");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch(Exception $e) {
            return $e;
        }
    }

    //contents 랜덤값 가져오기
    public function getContentsRandom() {
        try {
            $stmt = $this->db->prepare("select * from contents order by rand() limit 4");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch(Exception $e) {
            return $e;
        }
    }

    //contents 전체 값 출력
    public function getContents() {
        try {
            $stmt = $this->db->prepare("select * from contents");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch(Exception $e) {
            return $e;

        }
    }
}