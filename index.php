<?php
require "vendor/autoload.php";

use LH\Api\App;

$app = new App();

// Load servies into container.
$services = require __DIR__ . "/app/Services.php";
$services($app);



