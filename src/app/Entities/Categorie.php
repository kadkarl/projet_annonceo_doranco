<?php

namespace App\Entities;

class Categorie
{
    private $id_categorie;
    private $titre;
    private $motscles;
    

    /**
     * Get the value of id_categorie
     */ 
    public function getId_categorie()
    {
        return $this->id_categorie;
    }

    /**
     * Set the value of id_categorie
     *
     * @return  self
     */ 
    public function setId_categorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of motscles
     */ 
    public function getMotscles()
    {
        return $this->motscles;
    }

    /**
     * Set the value of motscles
     *
     * @return  self
     */ 
    public function setMotscles($motscles)
    {
        $this->motscles = $motscles;

        return $this;
    }
}