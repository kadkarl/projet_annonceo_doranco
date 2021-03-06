<?php

namespace App\Controllers;

use App\Models\AnnonceModel;
use App\Models\CategorieModel;
use App\Models\NobelModel;
use Sys\AbstractController;
use Sys\Router;

/**
 * Default Home Controller
 * Class HomeController
 * @package App\Controllers
 */
class HomeController extends AbstractController
{
    /**
     * Home Page
     *
     * @return void
     */
    public function index()
    {
        return self::render("index", [
            'title_page' => "Accueil Page",
            "annonces" => AnnonceModel::all(),
            "categories" => CategorieModel::all()
        ]);
    }

    /**
     * Search Annonce
     *
     * @return void
     */
    public function search()
    {
        if(Router::$request_method === "POST")
        {
            extract($_POST);
        }
    }
}
