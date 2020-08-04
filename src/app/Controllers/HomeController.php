<?php

namespace App\Controllers;

use App\Models\NobelModel;
use Sys\AbstractController;

/**
 * Default Home Controller
 * Class HomeController
 * @package App\Controllers
 */
class HomeController extends AbstractController
{
    public function index()
    {
        return self::render("index", [
            'title_page' => "Accueil Page"
        ]);
    }
}
