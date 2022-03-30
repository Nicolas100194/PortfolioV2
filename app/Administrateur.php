<?php

namespace App;

class Administrateur
{

    public function login(){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $pseudo = $_POST['username'];
            $pass = $_POST['password'];
            if($pseudo === "Nico" && $pass === "test"){
                session_start();
                $_SESSION['connecte'] = 1;
                header('Location: ./admin.php');
            } else {
                return "identifiants incorrects";
            }
        }
    }

    public function estConnecte(){
        session_start();
        var_dump($_SESSION);
        if(empty($_SESSION['connecte'])){
            header('Location: ./login.php');
            exit();
        }
    }

    public function Deconnect(){
        var_dump($_SESSION);

        session_start();
        unset($_SESSION);
    }


}

global $admin;
$admin = new \App\Administrateur();
