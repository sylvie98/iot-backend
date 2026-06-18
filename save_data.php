<?php

include "db.php";

// Get data from ESP32
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];

// Insert into database
$sql = "INSERT INTO sensor_data (temperature, humidity)
        VALUES ('$temperature', '$humidity')";

if (mysqli_query($conn, $sql)) {
    echo "Data saved successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

?>