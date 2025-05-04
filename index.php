<?php
if (php_sapi_name() == 'cli-server') {
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require 'vendor/autoload.php';
require __DIR__ . '/Backend/routes/UserRoutes.php';
require __DIR__ . '/Backend/routes/MoodRoutes.php';
require __DIR__ . '/Backend/routes/QuoteRoutes.php';
require __DIR__ . '/Backend/routes/JournalEntryRoutes.php';

Flight::start();