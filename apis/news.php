<?php
include("connection.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');


$query = $mysqli->prepare("SELECT distinct(news-content, created_at) FROM news );
$query->execute();
$array = $query->get_result();
$response=[];


?>