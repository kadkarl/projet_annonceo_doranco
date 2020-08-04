<?php

namespace App\Controllers;

use Sys\AbstractController;

/**
 * Default Error Controller
 * Class ErrorController
 * @package App\Controllers
 */
class ErrorController extends AbstractController
{

    public static function show404()
    {
        header("HTTP/1.0 404 Not Found");
        return self::render('error/404',[
            "title_page" => "Page not found !"
        ]);
    }

}
