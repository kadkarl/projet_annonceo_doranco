<?php

namespace App\Controllers;

use App\Entities\Profil;
use App\Models\ProfilModel;
use Sys\AbstractController;
use Sys\Router;
use Sys\Session;

/**
 * Profil Controller
 * Class ErrorController
 * @package App\Controllers
 */
class ProfilController extends AbstractController
{
    private static $error;

    public function create()
    {
        if(Router::$request_method === "POST")
        {
            extract($_POST);

            $membreSession = Session::get("membreSession");

            $profil = new Profil(); 
            $profil->setCivilite($civilite);
            $profil->setNom($nom);
            $profil->setPrenom($prenom);
            $profil->setTelephone($telephone);
            $profil->setId_membre($membreSession->getId_membre());

            if(ProfilModel::insert($profil))
            {
                return self::redirectToRoute(SITE_URL."app/dashboard");
            }

        }

        return self::render('profil/create', [
            "title_page" => "Création profil",
            "error" => self::$error
        ]);
    }
}
