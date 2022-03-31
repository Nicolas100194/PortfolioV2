<?php

namespace App;

class Projet
{
    public function getTitre(){
        return $this->Titre;
    }

    public function getTechnologies(){
        return $this->Technologies;
    }

    public function getNotions(){
        return $this->Notions;
    }


    public function getUrl(){
        return $this->Lien;
    }

    public function getImage(){
        return '<img class="admin-projet-img"src="'.$this->urlImage.'"/>';
    }


    public function addProjet(){
        $db = new DataBase('portfolio');
        if(!empty($_POST['titre']) && !empty($_POST['technologies']) && !empty($_POST['description']) && !empty($_POST['notions'])
        && !empty($_POST['url'])){
            $array =[
                'titre' => $_POST['titre'],
                'technologies' => $_POST['technologies'],
                'description' => $_POST['description'],
                'notions'=> $_POST['notions'],
                'url' => $_POST['url'],
            ];
            $db->Exec("INSERT INTO projets(Titre, Technologies, Description, Notions, Lien) VALUES (:titre, :technologies, :description, :notions, :url)", $array);
        }


        if(!empty($_FILES['urlImage'])){
            $cheminUpload = $_SERVER['DOCUMENT_ROOT'].'/PortfolioV2/PortfolioV2/assets/img/';
            if(!file_exists($cheminUpload.$_POST['titre'])){
                mkdir($cheminUpload.$_POST['titre']);
            }
            $dossier = $_POST['titre'];
            $cheminUpload .= $dossier."/";
            $extensions = array('.png', '.gif', 'jpg', '.jpeg');
            $extension = strrchr($_FILES['urlImage']['name'], '.');
            if (!in_array($extension, $extensions)){
                return 'erreur';
            }
            $image = '../assets/img/'.$dossier.'/'.$_FILES['urlImage']['name'];
            $array = [
              'urlImage' => $image,
              'titre' => $_POST['titre'],
            ];
            $db->Exec("UPDATE projets SET urlImage = :urlImage WHERE titre = :titre", $array);
            move_uploaded_file($_FILES['urlImage']['tmp_name'], $cheminUpload.$_FILES['urlImage']['name']);
        }
    }
}