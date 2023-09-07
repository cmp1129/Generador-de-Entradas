<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

require_once __DIR__ . '/vendor/autoload.php';
require_once  "config/ini-config.php";
require_once "bootstrap.php";

use \Mpdf\Mpdf;

try {
    $app = new App();
    $app->run();

} catch (Exception $e) {
    echo $e;
}

?>
