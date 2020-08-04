<?php

namespace App\Models;

use App\Entities\Membre;
use Exception;
use PDOException;
use Sys\AbstractModel;

/**
 * Class MembreModel
 * @package App\Models
 */
class MembreModel extends AbstractModel
{
    /**
     * Check Pseudo
     *
     * @param string $pseudo
     * @return integer
     */
    public static function checkPseudo(string $pseudo):int
    {
        return self::init()->query("select * from membre where pseudo = '$pseudo'")->rowCount();
    }

    /**
     * Check Email
     *
     * @param string $email
     * @return integer
     */
    public static function checkEmail(string $email):int
    {
        return self::init()->query("select * from membre where email = '$email'")->rowCount();
    }

    /**
     * Return Last Insert ID
     *
     * @param Membre $membre
     * @return void
     */
    public static function insert(Membre $membre): int
    {
        $hashMdp = self::hashPassword($membre->getMdp());
        $membre->setMdp($hashMdp);
        $membre->setDate_enregistrement(date_format($membre->getDate_enregistrement(), 'd-m-Y'));

        $query = self::init()->prepare("insert into membre (pseudo,email,mdp,status,date_enregistrement) values (:pseudo,:email,:mdp,:status,:date_enregistrement)");

        $query->execute([
            "pseudo" => $membre->getPseudo(),
            "email" => $membre->getEmail(),
            "mdp" => $membre->getMdp(),
            "status" => $membre->getStatus(),
            "date_enregistrement" => $membre->getDate_enregistrement()
        ]);
        
        return self::init()->lastInsertId();
       
    }

    public static function login(Membre $membre): bool
    {
        if($dbMembre = self::getMembre($membre))
        {
            $hashMdp = $dbMembre->getMdp();
            return password_verify($membre->getMdp(), $hashMdp);
        }

    }

    public static function getMembre(Membre $membre)
    {
        $email = $membre->getEmail();
        return self::init()->query("select * from membre where email = '$email'")->fetchObject('App\Entities\Membre');
    }

    /**
     * Hash Password
     *
     * @param string $mdp
     * @return string
     */
    private static function hashPassword(string $mdp):string
    {
        return password_hash($mdp, PASSWORD_BCRYPT);
    }

    /**
     * Verifiy Password
     *
     * @param string $plainmdp
     * @param string $hashMdp
     * @return boolean
     */
    private static function verifiyPassword(string $plainmdp, string $hashMdp):bool
    {
        return password_verify($plainmdp,$hashMdp);
    }
}
