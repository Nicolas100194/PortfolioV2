<?php

namespace App;

class Projet
{
    public function getId(){
        return $this->id;
    }

    public function getType(){
        return $this->Type;
    }

    public function getTitre(){
        return $this->Titre;
    }

    public function getDescription(){
        return $this->Description;
    }

    public function getTechnologies(){
        $technologies = explode(',', $this->Technologies);
        //var_dump($technologies);
        foreach ( $technologies as $tech){
            //echo $technologie;
          echo '<div class="ez">'.$tech.'</div>';
        }
        //return $this->Technologies;
    }

    public function getTehnologiesJson(){
        return explode(',', $this->Technologies);
    }

    public function getNotionsJson(){
        return explode(',', $this->Notions);
    }

    public function getNotions(){
        $notions = explode(',', $this->Notions);
        foreach ( $notions as $notion) {
            echo '<li>'.$notion.'</li>';
        }
    }

    public function getUrl(){
        return $this->Lien;
    }

    public function getImage(){
        return '<img class="admin-projet-img"src="'.$this->urlImage.'"/>';
    }

    public function getImageFront(){
        return'<img class="img-projet" src="'.$this->urlImageFront.'"/>';
    }


    public function addProjet(){
        $db = new DataBase('portfolio');
        if(!empty($_POST['type-projet']) && !empty($_POST['titre']) && !empty($_POST['technologies']) && !empty($_POST['description']) && !empty($_POST['notions'])
        && !empty($_POST['url'])){
            $array =[
                'type' => $_POST['type-projet'],
                'titre' => $_POST['titre'],
                'technologies' => $_POST['technologies'],
                'description' => $_POST['description'],
                'notions'=> $_POST['notions'],
                'url' => $_POST['url'],
            ];
            $db->Exec("INSERT INTO projets(Type, Titre, Technologies, Description, Notions, Lien) VALUES (:type, :titre, :technologies, :description, :notions, :url)", $array);
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
                return 'erreur de saisie formulaire';
            }
            $image = '../assets/img/'.$dossier.'/'.$_FILES['urlImage']['name'];
            $imageFront = 'assets/img/'.$dossier.'/'.$_FILES['urlImage']['name'];
            $array = [
              'urlImageFront' => $imageFront,
              'urlImage' => $image,
              'titre' => $_POST['titre'],
            ];
            $db->Exec("UPDATE projets SET urlImage = :urlImage, urlImageFront = :urlImageFront WHERE titre = :titre", $array);
            move_uploaded_file($_FILES['urlImage']['tmp_name'], $cheminUpload.$_FILES['urlImage']['name']);
        }
    }

    public function getAllProjetsAdmin(){
        $db = new DataBase('portfolio');
        foreach ($db->queryObj('SELECT * FROM projets', 'App\Projet') as $projet){
            ?>
                <div class="admin-card-project">
                    <h3><?= $projet->getTitre()?></h3>
                    <h4>Type</h4>
                    <p><?= $projet->getType()?></p>
                    <h4>Description</h4>
                    <p><?= $projet->getDescription()?></p>
                    <h4>Technologies</h4>
                    <div class="grid">
                        <?= $projet->getTechnologies()?>
                    </div>
                    <h4>Notions</h4>
                    <ul><?= $projet->getNotions()?></ul>
                    <h4>Image profil</h4>
                    <?= $projet->getImage()?>
                    <?= $projet->getImageFront()?>
                    <h4>url</h4>
                    <p><?= $projet->getUrl()?></p>
                </div>
            <?php
        }
    }

    public function getGridAllProjets(){
        require 'app/Database.php';
        $db = new DataBase('portfolio');
        foreach ($db->queryObj('SELECT * FROM projets', 'App\Projet') as $projet){
            ?>
            <div id="<?= $projet->getId() ?>" class="projet <?= $projet->getType() ?>">
                <?= $projet->getImageFront() ?>
                <a id="<?= $projet->getId() ?>" class="link-projet <?= $projet->getTitre()?>" href="#popup">
                    <div class="content-link-hover <?= $projet->getTitre() ?>">
                        <img class="projet-img-hover" src="assets/img/consulter.png"/>
                        <p class="project-txt-hover">Détails</p>
                    </div>
                </a>
            </div>
            <?php
        }
    }


    public function getAllProjets(){
        //require 'app/Database.php';
        $db = new DataBase('portfolio');
        $tableauProjets['projets'] = [];
        $response = $db->queryObj('SELECT * FROM projets', 'App\Projet');
        foreach($response as $item){
            $projet = [
                    "id" => $item->getId(),
                    "titre" => $item->getTitre(),
                    "type" => $item->getType(),
                    "description" => $item->getDescription(),
                    "technologies" => $item->getTehnologiesJson(),
                    "notions" => $item->getNotionsJson(),
                    "image" => $item->getImagefront(),
                    "url" => $item->getUrl()
            ];
            $tableauProjets['projets'][] = $projet;
        }
        echo json_encode($tableauProjets);
    }


}

require 'Database.php';
$projet = new \App\Projet();
$projet->getAllProjets();
