<?php

namespace App\Entities;

class Annonce
{
    private $id_annonce;
    private $titre;
    private $description;
    private $adresse;
    private $cp;
    private $ville;
    private $pays;
    private $prix;
    private $membre_id;
    private $photo_id;
    private $categorie_id;
    private $date_enregistrement;

    /**
     * Get the value of id_annonce
     */ 
    public function getId_annonce()
    {
        return $this->id_annonce;
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
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of pays
     */ 
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of cp
     */ 
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set the value of cp
     *
     * @return  self
     */ 
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get the value of membre_id
     */ 
    public function getMembre_id()
    {
        return $this->membre_id;
    }

    /**
     * Set the value of membre_id
     *
     * @return  self
     */ 
    public function setMembre_id($membre_id)
    {
        $this->membre_id = $membre_id;

        return $this;
    }

    /**
     * Get the value of photo_id
     */ 
    public function getPhoto_id()
    {
        return $this->photo_id;
    }

    /**
     * Set the value of photo_id
     *
     * @return  self
     */ 
    public function setPhoto_id($photo_id)
    {
        $this->photo_id = $photo_id;

        return $this;
    }

    /**
     * Get the value of categorie_id
     */ 
    public function getCategorie_id()
    {
        return $this->categorie_id;
    }

    /**
     * Set the value of categorie_id
     *
     * @return  self
     */ 
    public function setCategorie_id($categorie_id)
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }

    /**
     * Get the value of date_enregistrement
     */ 
    public function getDate_enregistrement()
    {
        return $this->date_enregistrement;
    }

    /**
     * Set the value of date_enregistrement
     *
     * @return  self
     */ 
    public function setDate_enregistrement($date_enregistrement)
    {
        $this->date_enregistrement = $date_enregistrement;

        return $this;
    }

}
