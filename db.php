<?php
$servername = getenv('DB_SERVER') ?: 'localhost';
$username = getenv('DB_USERNAME') ?: 'root';
$password = getenv('DB_PASSWORD') ?: ''; // Default XAMPP password is blank
$dbname = getenv('DB_NAME') ?: 'cngms'; // Ensure this matches the database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error . " (" . $conn->connect_errno . ")");
    die("Connection failed. Please try again later.");
}
?>