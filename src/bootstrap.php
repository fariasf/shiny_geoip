<?php

declare(strict_types=1);

define('PROJECT_ROOT', __DIR__ . '/../');

$config = include PROJECT_ROOT . 'config/config.php';

require_once PROJECT_ROOT . 'src/ShinyGeoip.php';
require_once PROJECT_ROOT . 'src/Action/ShowHomepageAction.php';
require_once PROJECT_ROOT . 'src/Action/ShowLocationAction.php';
require_once PROJECT_ROOT . 'src/Domain/LocationDomain.php';
require_once PROJECT_ROOT . 'src/Responder/HttpResponder.php';
require_once PROJECT_ROOT . 'src/Responder/ShowLocationResponder.php';
require_once PROJECT_ROOT . 'src/Responder/ShowHomepageResponder.php';

// If maxminddb extension is not installed we need to include the PHP reader:
if (!class_exists('MaxMind\Db\Reader')) {
    require_once PROJECT_ROOT . 'vendor/MaxMind/Db/Reader.php';
    require_once PROJECT_ROOT . 'vendor/MaxMind/Db/Reader/Decoder.php';
    require_once PROJECT_ROOT . 'vendor/MaxMind/Db/Reader/Util.php';
    require_once PROJECT_ROOT . 'vendor/MaxMind/Db/Reader/Metadata.php';
    require_once PROJECT_ROOT . 'vendor/MaxMind/Db/Reader/InvalidDatabaseException.php';
}
