<?php

$servername = "localhost";
$username = "id12798101_manel";
$password = "douwensdb";
$database = "id12798101_base";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
