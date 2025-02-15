<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$username = "root";
$password = "";
$database = "charity_db";

// Connect to database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $amount = htmlspecialchars($_POST['amount']);
    $frequency = htmlspecialchars($_POST['frequency']);
    $payment_method = htmlspecialchars($_POST['payment_method']);

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO donations (name, email, amount, frequency, payment_method, status) VALUES (?, ?, ?, ?, ?, 'pending')");
    $stmt->bind_param("ssdss", $name, $email, $amount, $frequency, $payment_method);

    if ($stmt->execute()) {
        echo "Donation successfully recorded. Thank you for your contribution!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Close connection
$conn->close();
?>