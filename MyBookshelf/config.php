<?php
// Database connection configuration for XAMPP defaults
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mybookshelf_db"; // Replace this with your desired database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
