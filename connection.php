<?php
$servername = "localhost:3307";
$username = "root";
$password = ""; // Assuming you're using no password for the root user
$database = "bhumi_";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected successfully";
}
?>
