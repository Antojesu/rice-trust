<?php
// Database connection
$host = 'localhost';
$dbname = 'celebrations_db';
$username = 'root'; // Default username for MySQL
$password = ''; // Default password for MySQL

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Fetch active celebrations
$now = date('Y-m-d H:i:s'); // Current date and time
$stmt = $conn->prepare("SELECT * FROM celebrations WHERE start_time <= :now AND end_time >= :now");
$stmt->bindParam(':now', $now);
$stmt->execute();
$celebrations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
