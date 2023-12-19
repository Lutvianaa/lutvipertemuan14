<?php

function connectToDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_image_flutter";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
