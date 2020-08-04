<?php

namespace App\Controllers;

use App\Models\AnnonceModel;
use Sys\AbstractController;
use Sys\Session;

class AppController extends AbstractController
{
    public function dashboard()
    {
        return self::render('app/dashboard', [
            "title_page" => "Tableau de bord",
            "annonces" => AnnonceModel::AllParMembre()
        ]);
    }
}