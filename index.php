<?php
require "vendor/autoload.php";

use App\App;
use App\Sources\BadGuys;
use App\Sources\GoogleAnalytics;
use App\Sources\PositiveGuys;

$app = new App(sources: [
    new GoogleAnalytics(new PDO('mysql:host=mysql;dbname=stats', 'root', '')),
    new PositiveGuys(),
    new BadGuys()
]);
$app->run();
