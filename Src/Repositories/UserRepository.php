<?php


namespace App\Repositories;


use Frasma\DB\ORM;
use Frasma\DB\Repository;

class UserRepository extends Repository
{
    protected $table = "usuarios";

    public function get(string $email): array{
        $this->orm
            ->fields("*")
            ->where(ORM::equals('usu_email', "'$email'"))
            ->getTo($result);
        return $result;
    }
}