<?php

//เข้ารหัส
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age:1728000');
header('Content-Length:0');
header('Content-Type: text/plain');


//ประกาศตัวแปร ในการเชื่อมต่อระบบฐานข้อมูล
$hostAPI = "localhost";
$userAPI = "root";
$passAPI = "";
$dbNameAPI = "ionic_api_crud";

$conn = mysqli_connect($hostAPI, $userAPI, $passAPI, $dbNameAPI) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
mysqli_set_charset($conn,"utf8");



?>