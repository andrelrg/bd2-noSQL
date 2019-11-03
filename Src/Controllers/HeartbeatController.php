<?php

namespace App\Controllers;

use Frasma\Controller;

class HeartbeatController extends Controller {

    public function ping(){
        return $this->successContent(array("success"=>true));
    }

}
