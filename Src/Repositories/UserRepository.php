<?php


namespace App\Repositories;


use Frasma\DB\ORM;
use Frasma\DB\Repository;

class UserRepository extends Repository
{
    protected $table = "usuarios";

    public function get(string $email): array{
        $this->orm
            ->fields("usu_id as Id",
                "usu_ultimoacesso as LastAccess",
                "usu_email as Email",
                "usu_nome as Name",
                "usu_pais as Country",
                "usu_estado as State",
                "usu_cidade as City",
                "gender as Gender")
            ->where(ORM::equals('usu_email', "'$email'"))
            ->getTo($result);
        return $result;
    }
}