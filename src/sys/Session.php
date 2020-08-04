<?php

namespace Sys;

/**
 * Session Class
 */
class Session
{
    /**
     * Set Session
     *
     * @param string $name
     * @param [type] $data
     * @return void
     */
    public static function set(string $name, $data)
    {
        if (!isset($_SESSION)) session_start();
        $_SESSION[$name] = $data;
    }

    /**
     * Get Session
     *
     * @param string $name
     * @return mixed
     */
    public static function get(string $name)
    {
        if (!isset($_SESSION)) session_start();
        if (isset($_SESSION[$name])) return  $_SESSION[$name];
        else return null;
    }

    /**
     * Remove Session
     *
     * @param string $name
     * @return void
     */
    public static function remove(string $name)
    {
        if (!isset($_SESSION)) session_start();
        unset($_SESSION[$name]);
    }

    /**
     * Clear Session
     *
     * @return void
     */
    public static function clear()
    {
        if (!isset($_SESSION)) session_start();
        session_destroy();
    }
}
