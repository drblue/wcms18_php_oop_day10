<?php

require(dirname(__FILE__) . "/../config/app.php");
require(dirname(__FILE__) . "/../vendor/autoload.php");

$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USERNAME, DB_PASSWORD);
