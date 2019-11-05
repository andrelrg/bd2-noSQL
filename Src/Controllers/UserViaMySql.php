<?php


namespace App\Controllers;


use App\Repositories\UserRepository;
use Frasma\Controller;

class UserViaMySql extends Controller
{
    public function get(){
        $ok = $this->checkRequest($this->get, "email");
        if (!$ok){
            return $this->badRequest();
        }

        $email = $this->get["email"];

        $user = new UserRepository();
        var_dump($user->get($email));exit;

    }

}