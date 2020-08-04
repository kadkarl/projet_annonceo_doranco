<?php

namespace App\Controllers;

use App\Entities\Membre;
use App\Models\MembreModel;
use App\Models\ProfilModel;
use DateTime;
use Sys\AbstractController;
use Sys\Router;
use Sys\Session;

class MembreController extends AbstractController
{
    /**
     *
     * @var [string]
     */
    private static $error;

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {
        if(Session::get("membreSession")) return self::redirectToRoute(SITE_URL . "/app/dashboard");

        if(Router::$request_method === "POST")
        {
            extract($_POST);

            if(MembreModel::checkPseudo($pseudo) > 0)
            {
               self::$error = "Pseudo non disponible !";
            }

            else if (MembreModel::checkEmail($email) > 0) 
            {
                self::$error = "Email déja inscrit !";
            }

            else{
                $membre = new Membre();
                $membre->setPseudo($pseudo);
                $membre->setEmail($email);
                $membre->setMdp($password);
                $membre->setDate_enregistrement(new DateTime());
                $membre->setStatus(0);

                $membre->setId_membre(MembreModel::insert($membre));
                $membre->setMdp("Hello baby");

                Session::set("membreSession",$membre);

                if(ProfilModel::checkProfil($membre->getId_membre()) === 0)
                {
                    return self::redirectToRoute(SITE_URL."/profil/create");
                }

                return self::redirectToRoute(SITE_URL."/app/dashboard");
            }           
        }

        return self::render("membre/register",[
            "title_page" => "Inscription",
            "error" => self::$error
        ]);
    }

    /**
     * Login
     *
     * @return void
     */
    public function login()
    {
        if (Session::get("membreSession")) return self::redirectToRoute(SITE_URL."/app/dashboard");

        if (Router::$request_method === "POST")
        {
            extract($_POST);
            $membre = new Membre();
            $membre->setEmail($email);
            $membre->setMdp($password);

            if(MembreModel::login($membre))
            {
                $membre = MembreModel::getMembre($membre);
                $membre->setMdp("Hello baby");
                Session::set("membreSession", $membre);

                if(ProfilModel::checkProfil($membre->getId_membre()) === 0)
                {
                    return self::redirectToRoute(SITE_URL."/profil/create");
                }

                return self::redirectToRoute(SITE_URL."/app/dashboard");
            }
        }

        return self::render("membre/login", [
            "title_page" => "Espace membre",
            "error" => self::$error
        ]);
    }

    /**
     * Reset Password
     *
     * @return void
     */
    public function resetPassword()
    {

    }

    /**
     * Logout
     *
     * @return void
     */
    public function logout()
    {
        Session::clear();
        self::redirectToRoute(SITE_URL);
    }
}