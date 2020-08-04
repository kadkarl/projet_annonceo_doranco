<?php

namespace App\Models;

use Sys\AbstractModel;

class CategorieModel extends AbstractModel
{
    public static function all()
    {
        return self::init()->query("select * from categorie")->fetchAll(\PDO::FETCH_OBJ);
    }
}