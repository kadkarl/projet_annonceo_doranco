<?php

namespace App\Models;

use App\Entities\Annonce;
use PDO;
use Sys\AbstractModel;
use Sys\Session;

/**
 * Annonce Model
 */
class AnnonceModel extends AbstractModel
{
    /**
     * All Annonce
     *
     * @return void
     */
    public static function all()
    {
        return self::init()
            ->query("select * from annonce")
            ->fetchAll(PDO::FETCH_CLASS, 'App\Entities\Annonce');
    }

    /**
     * All Annonce Par Membre
     *
     * @return void
     */
    public static function allParMembre()
    {
       if( $membre_id = Session::get("membreSession")->getId_membre())
       {
            return self::init()
                ->query("select * from annonce where membre_id = '$membre_id'")
                ->fetchAll(PDO::FETCH_CLASS, 'App\Entities\Annonce');
       }
    }

    /**
     * Insert Annonce
     *
     * @param Annonce $annonce
     * @return void
     */
    public static function insert(Annonce $annonce)
    {
        $query = self::init()->prepare("insert into annonce (titre,description,adresse,cp,ville,pays,prix,membre_id,categorie_id,date_enregistrement) values (:titre,:description,:adresse,:cp,:ville,:pays,:prix,:membre_id,:categorie_id,:date_enregistrement)");

        //return var_dump($annonce->getDate_enregistrement());

        return $query->execute([
            "titre" => $annonce->getTitre(),
            "description" => $annonce->getDescription(),
            "adresse" => $annonce->getAdresse(),
            "cp" => $annonce->getCp(),
            "ville" => $annonce->getVille(),
            "pays" => $annonce->getPays(),
            "prix" => $annonce->getPrix(),
            "membre_id" => $annonce->getMembre_id(),
            //"photo_id" => $annonce->getPhoto_id(),
            "categorie_id" => $annonce->getCategorie_id(),
            "date_enregistrement" => $annonce->getDate_enregistrement()
        ]);
    }

    /**
     * Detail Annonce
     *
     * @param integer $id
     * @return mixed
     */
    public static function detail(int $id)
    {
       return self::init()->query("select * from annonce where id_annonce = '$id'")->fetchObject("App\Entities\Annonce");
    }

    /**
     * Delete Annonce
     *
     * @param integer $id
     * @return void
     */
    public static function delete(int $id)
    {
        return self::init()->query("delete from annonce where id_annonce = '$id'");
    }

}