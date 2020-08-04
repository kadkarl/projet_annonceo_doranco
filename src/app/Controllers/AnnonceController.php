<?php

namespace App\Controllers;

use App\Entities\Annonce;
use App\Models\AnnonceModel;
use App\Models\CategorieModel;
use DateTime;
use Sys\AbstractController;
use Sys\Router;
use Sys\Session;

class AnnonceController extends AbstractController
{
    public function create()
    {
        if(Router::$request_method === "POST")
        {
            extract($_POST);

            $annonce = new Annonce();
            $annonce->setTitre($titre);
            $annonce->setDescription($description);
            $annonce->setAdresse($adresse);
            $annonce->setCp($cp);
            $annonce->setVille($ville);
            $annonce->setPays($pays);
            $annonce->setPrix($prix);
            $annonce->setMembre_id(Session::get("membreSession")->getId_membre());
            $annonce->setPhoto_id(1);
            $annonce->setCategorie_id($id_categorie);
            $annonce->setDate_enregistrement(new DateTime());
            $annonce->setDate_enregistrement(date_format($annonce->getDate_enregistrement(), 'd-m-Y'));

            return var_dump(AnnonceModel::insert($annonce));

            if(AnnonceModel::insert($annonce))
            {
                self::redirectToRoute(SITE_URL."app/dashboard");
            }

        }

        return self::render('annonce/create', [
            "title_page" => "Création annonce",
            "categories" => CategorieModel::all()
        ]);
    }
}
