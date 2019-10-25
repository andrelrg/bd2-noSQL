<?php

namespace App;

use Frasma\Router;
use App\Controllers\HeartbeartController;


//HeartbeatController
Router::route(GET, '/heartbeat', "App\Controllers\HeartbeartController", 'ping');

//$verb, $pattern, $class, $method)