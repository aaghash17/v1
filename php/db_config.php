<?php
$servername = "localhost"; // Replace with your actual server name
$username = "root";     // Replace with your actual username
$password = "admin123";     // Replace with your actual password
$dbname = "archery";  // Replace with your actual database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
