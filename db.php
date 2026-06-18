<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "iot_monitoring";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Database connection failed");
}

?>