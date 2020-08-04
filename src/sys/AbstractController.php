<?php

namespace Sys;

class AbstractController
{
    public static function render(string $view, array $vars = null)
    {
        new Views($view,$vars);
    }

    public static function redirectToRoute(string $uri)
    {
        header("Location:".$uri);
    }

}
