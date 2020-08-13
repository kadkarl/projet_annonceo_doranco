<?php

namespace Sys;

/**
 * Class Abstract Controller
 */
abstract class AbstractController
{
    /**
     * View Render
     *
     * @param string $view
     * @param array $vars
     * @return void
     */
    public static function render(string $view, array $vars = null)
    {
        new Views($view,$vars);
    }

    /**
     * Redirect
     *
     * @param string $uri
     * @return void
     */
    public static function redirectToRoute(string $uri)
    {
        header("Location:".$uri);
    }

}
