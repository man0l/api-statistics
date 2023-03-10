<?php
require "vendor/autoload.php";

use App\App;
use App\Sources\GoogleAnalytics;
use App\Sources\PositiveGuys;

$app = new App([
    new GoogleAnalytics(new PDO('mysql:host=mysql;dbname=stats', 'root', '')),
    new PositiveGuys()
]);
$app->run();
