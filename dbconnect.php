<?php
$servername = "192.168.0.3";
$username = "root";
$password = "25604003";
$dbname = "hackathon";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// echo "connection established successfully";
?>