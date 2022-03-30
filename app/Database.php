<?php

namespace App;

use \PDO;
class DataBase{

    private $dbname;
    private $db_user;
    private $db_password;
    private $db_host;
    private $pdo;

    public function __construct($dbname, $db_user = 'root', $db_password = '', $db_host = "localhost"){
        $this->dbname = $dbname;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
        $this->db_host = $db_host;
    }

    private function getPDO(){
        if ($this->pdo === null) {
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
                $this->pdo = $pdo;
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        return $this->pdo;
    }

    public function query($sqlQuery, $className){
        $req = $this->getPDO()->query($sqlQuery);
        $result = $req->fetchAll(PDO::FETCH_CLASS, $className);
        return $result;
    }

}