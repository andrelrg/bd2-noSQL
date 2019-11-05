<?php

namespace App;

use Frasma\Router;

//HeartbeatController
Router::route(GET, '/heartbeat', "HeartbeatController", "ping");
//UserViaCache
Router::route(GET, '/user/cache', "UserViaCache", "get");
//UserViaMySql
Router::route(GET, '/user/mysql', "UserViaMySql", "get");

