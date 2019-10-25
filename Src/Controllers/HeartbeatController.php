<?php

namespace App\Controllers;

use Frasma\Controller;

class HeartbeartController extends Controller {
    public function ping(){
        return $this->success("pong");
    } 
}
