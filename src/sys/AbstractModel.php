<?php

namespace Sys;

use PDO;

/**
 * Pattern Singleton
 * Class AbstractModel
 * @package Sys
 */

class AbstractModel
{
    public static  $db;

    public static function init()
    {
        $db_config = require_once ROOT_PATH."Database.php";

        if(self::$db == null)
        {
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
