<?php

namespace App;

use Frasma\Router;

//HeartbeatController
Router::route(GET, '/heartbeat', "HeartbeatController", "ping");
