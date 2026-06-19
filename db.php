<?php

$host = "sql307.infinityfree.com";
$user = "if0_42213708";
$password = "sCItt5xRu2vGM";
$db = "if0_42213708_iot_monitoring";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Database connection failed");
}

?>