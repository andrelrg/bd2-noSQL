<?php

    // Composer Autoload.
    require_once __DIR__ . "/vendor/autoload.php";
    require_once __DIR__ . "/Settings/Settings.php";

    use frasma\Api;
    Api::go();