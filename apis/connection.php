<?php

$host = "localhost";
$db_user = "root";
$db_pass = '';
$db_name = "news_db";

$connection = new mysqli($host, $db_user, $db_pass, $db_name);

if ($connection->connect_error) {
    die('Connection failed: ' + $connection->connect_error);
}