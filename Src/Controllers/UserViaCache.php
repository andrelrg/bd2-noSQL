<?php


namespace App\Controllers;


use Frasma\Controller;

class UserViaCache extends Controller
{
    public function get(){
        $ok = $this->checkRequest(GET, "email");

        if (!$ok){
            return $this->badRequest();
        }

    }
}