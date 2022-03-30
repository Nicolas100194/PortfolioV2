<?php

namespace App;

class Administrateur
{
    private $username;
    private $password;

    public function __construct(){
        require 'Database.php';
        $db = new DataBase('portfolio');
        $results = $db->query('SELECT username, password FROM users');
        $this->password = $results[0]['password'];
        $this->username = $results[0]['username'];
    }

    public function login(){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            if($_POST['username'] === $this->username && password_verify($_POST['password'], $this->password)){
                session_start();
                $_SESSION['connecte'] = 1;
                header('Location: ./admin.php');
            } else {
                return "identifiants incorrects";
            }
        }
    }


    public function estConnecte(){
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }
        return !empty($_SESSION['connecte']);
    }

    public function verifLogged(){
        if(!$this->estConnecte()){
            $_SESSION['nonConnecte'] = 1;
            header('Location: ../pages/login.php');
            exit();
        }
    }
}

global $admin;
$admin = new \App\Administrateur();
