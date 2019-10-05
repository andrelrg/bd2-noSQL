<?php

namespace App;

use frasma\Router;

//HeartbeatController
Router::route(GET, '/heartbeat', 'HeartbeatController', 'ping');

