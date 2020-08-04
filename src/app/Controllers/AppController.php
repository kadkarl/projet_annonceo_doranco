<?php

namespace App\Controllers;

use App\Models\AnnonceModel;
use Sys\AbstractController;
use Sys\Session;

/**
 * App Class
 */
class AppController extends AbstractController
{
    /**
     * Dashboard
     *
     * @return void
     */
    public function dashboard()
    {
        if(!Session::get("membreSession"))
        {
            self::redirectToRoute(SITE_URL);
        }

        return self::render('app/dashboard', [
            "title_page" => "Tableau de bord",
            "mesannonces" => AnnonceModel::allParMembre()
        ]);
    }    
}