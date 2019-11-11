<?php


namespace App\Controllers;


use App\Repositories\UserRepository;
use Frasma\Cache\Redis;
use Frasma\Controller;

class UserViaMySql extends Controller
{
    public function get(){
        $ok = $this->checkRequest($this->get, "email");
        if (!$ok){
            return $this->badRequest();
        }

        $email = $this->get["email"];

        $executionStartTime = microtime(true);
        $user = new UserRepository();
        $result = $user->get($email);
        $executionEndTime = microtime(true);

        $seconds = $executionEndTime - $executionStartTime;

        $r = new Redis();
        $r->set("cache_".$email, json_encode($result), 1);

        $ret = array("result" => $result, "elapsedTime" => $seconds);
        return $this->success($ret);
    }

}