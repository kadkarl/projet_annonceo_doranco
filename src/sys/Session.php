<?php

namespace Sys;

class Session
{
    public static function set(string $name, $data)
    {
        if (!isset($_SESSION)) session_start();
        $_SESSION[$name] = $data;
    }

    public static function get(string $name)
    {
        if (!isset($_SESSION)) session_start();
        if (isset($_SESSION[$name])) return  $_SESSION[$name];
        else return null;
    }

    public static function remove(string $name)
    {
        if (!isset($_SESSION)) session_start();
        unset($_SESSION[$name]);
    }

    public static function clear()
    {
        session_destroy();
    }
}
