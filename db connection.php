<?php
$servername = "localhost"; // Change this if your database is on a different server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "virtual_insurance_planning_workshops_platform"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
