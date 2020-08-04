<?php

namespace Sys;

class Views
{
    public function __construct(string $view, array $data = null)
    {
        $path_view = VIEWS_PATH.$view.".php";

        if(file_exists($path_view))
        {
            if($data)
            {
                ob_start();
                extract($data);
                require_once $path_view;
                return $data;
                ob_end_clean();
            }else{
                require_once $path_view;
            }
        }else{
            throw new \Exception("La vue $view n'existe pas dans le dossier ".VIEWS_PATH);
        }
    }
}
