<?php


namespace App\Controllers;


use Frasma\Controller;
use Frasma\Cache\Redis;

class UserViaCache extends Controller
{
    public function get(){
        $ok = $this->checkRequest($this->get, "email");
        if (!$ok){
            return $this->badRequest();
        }

        $email = $this->get["email"];

        $executionStartTime = microtime(true);
        try{
            $r = new Redis();
            $result = $r->get("cache" . $email);
        }catch (\Exception $e){
            return $this->fail();
        }
        $executionEndTime = microtime(true);

        $seconds = $executionEndTime - $executionStartTime;

        $ret = array("result" => json_encode($result), "elapsedTime" => $seconds);
        return $this->success($ret);
    }
}