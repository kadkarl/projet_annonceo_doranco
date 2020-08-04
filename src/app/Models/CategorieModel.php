<?php

namespace App\Models;

use Sys\AbstractModel;

/**
 * Categorie Model
 */
class CategorieModel extends AbstractModel
{
    /**
     * All Categories
     *
     * @return void
     */
    public static function all()
    {
        return self::init()->query("select * from categorie")->fetchAll(\PDO::FETCH_OBJ);
    }
}