<?php

    // Composer Autoload.
    require_once __DIR__ . "/vendor/autoload.php";

    use Frasma\Api;
    use Frasma\Settings\Settings;

    Settings::getSettings(dirname(__FILE__).'/Settings/config.json');
    Api::go();