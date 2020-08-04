<?php

namespace App\Models;

use App\Entities\Profil;

/**
 * Profil Model
 * @package App\Models
 */
class ProfilModel extends \Sys\AbstractModel
{
    /**
     * Check Profil
     *
     * @param integer $id_membre
     * @return integer
     */
    public static function checkProfil(int $id_membre): int
    {
        return self::init()->query("select * from profil where id_membre = '$id_membre'")->rowCount();
    }

    /**
     * Get Profil
     *
     * @param integer $id_membre
     * @return Profil
     */
    public static function getProfil(int $id_membre): Profil
    {
        return self::init()->query("select * from profil where id_membre = '$id_membre'")->fetchObject("App\Entities\Profil");
    }

    /**
     * Insert Profil
     *
     * @param Profil $profil
     * @return void
     */
    public static function insert(Profil $profil)
    {
        $query = self::init()->prepare("insert into profil (id_membre,civilite,nom,prenom,telephone) values (:id_membre,:civilite,:nom,:prenom,:telephone)");

        return $query->execute([
            "id_membre" => $profil->getId_membre(),
            "civilite" => $profil->getCivilite(),
            "nom" => $profil->getNom(),
            "prenom" => $profil->getPrenom(),
            "telephone" => $profil->getTelephone()
        ]);
    }
    
}
