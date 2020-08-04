<?php

namespace Sys;

use PDO;

/**
 * Pattern Singleton
 * Class Abstract Model
 * @package Sys
 */

class AbstractModel
{
    /**
     * @var [string]
     */
    public static  $db;

    /**
     * Init PDO
     *
     * @return void
     */
    public static function init()
    {
        if(self::$db === null)
        {
            $db_config = require_once ROOT_PATH."Database.php";

            try {
                self::$db = new PDO($db_config['dsn'],$db_config['user'],$db_config['password']);
            }catch (\Exception $ex)
            {
                throw new \Exception("Database Error : ".$ex->getMessage());
                die();
            }
        }
        return self::$db;
    }

}
