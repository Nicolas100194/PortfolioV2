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

    public function getImage(){
        return $this->image;
    }

    public function getUrl(){
        return $this->Lien;
    }
}