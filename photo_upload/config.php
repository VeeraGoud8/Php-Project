<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "studentphoto";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->close();

?>