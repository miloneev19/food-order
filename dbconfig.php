<?php
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "food_ordering"; // Replace with your database name

// Create a connection
$conn = new mysqli($localhost, $root, $root, $food_ordering);

// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
}
?>
