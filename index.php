<?php

    // Composer Autoload.
    require_once __DIR__ . "/vendor/autoload.php";
    require_once __DIR__ . "/Settings/Settings.php";

    // Arquivo de Rotas
    use frasma\Api;
    
    Api::go();