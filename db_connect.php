<?php
$host = "localhost"; // Change if using a remote database
$user = "root"; // Change as per your database credentials
$password = ""; // Set your MySQL password
$database = "donation_db"; // Name of your database

$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
