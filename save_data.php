<?php
header("Access-Control-Allow-Origin: *");

include "db.php";

$temperature = $_GET['temperature'] ?? '';
$humidity = $_GET['humidity'] ?? '';

$sql = "INSERT INTO sensor_data (temperature, humidity) VALUES ('$temperature', '$humidity')";

if (mysqli_query($conn, $sql)) {
    echo "Data saved successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>