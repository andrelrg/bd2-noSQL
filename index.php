<?php

    // Composer Autoload.
    require_once __DIR__ . "/vendor/autoload.php";
    require_once __DIR__ . "/Settings/Settings.php";
    use Settings\Settings;
    use Frasma\Api;
    global $SETTINGS;
    $SETTINGS = Settings::getSettings();
    Api::go();