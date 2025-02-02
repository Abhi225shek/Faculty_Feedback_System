<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "feedback_system";
$port = 3307;

// Establish connection
$conn = mysqli_connect($host, $username, $password, $database, $port);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
