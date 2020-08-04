<?php

namespace App\Models;

use App\Entities\Annonce;
use Sys\AbstractModel;
use Sys\Session;

class AnnonceModel extends AbstractModel
{
    public static function AllParMembre()
    {
        $membre_id = Session::get("membreSession")->getId_membre();

        return self::init()->query("select * from annonce where membre_id = '$membre_id'")->fetchObject('App\Entities\Annonce');
    }

    public static function insert(Annonce $annonce)
    {
        $query = self::init()->prepare("insert into annonce (titre,description,adresse,cp,ville,pays,prix,membre_id,photo_id,categorie_id,date_enregistrement) values (:titre,:description,:adresse,:cp,:ville,:pays,:prix,:membre_id,:photo_id,:categorie_id,:date_enregistrement)");

        return $query->execute([
            "titre" => $annonce->getTitre(),
            "description" => $annonce->getDescription(),
            "adresse" => $annonce->getAdresse(),
            "cp" => $annonce->getCp(),
            "ville" => $annonce->getVille(),
            "pays" => $annonce->getPays(),
            "prix" => $annonce->getPrix(),
            "membre_id" => $annonce->getMembre_id(),
            "photo_id" => $annonce->getPhoto_id(),
            "categorie_id" => $annonce->getCategorie_id(),
            "date_enregistrement" => $annonce->getDate_enregistrement()
        ]);
    }

}