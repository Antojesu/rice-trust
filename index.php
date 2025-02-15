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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Celebrations</title>
    <style>
        .celebration {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .celebration h2 {
            margin-top: 0;
            color: #333;
        }
        .celebration p {
            color: #666;
        }
        .celebration img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav>
        <!-- Your Navbar Here -->
    </nav>

    
</body>
</html>