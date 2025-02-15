<?php
include 'db_connection.php'; // Include the database connection

// Fetch celebrations from the database
$sql = "SELECT * FROM celebrations ORDER BY date ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celebrations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .navbar {
            background-color: #4CAF50;
            overflow: hidden;
            padding: 10px 20px;
        }
        .navbar a {
            float: left;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            font-size: 16px;
        }
        .navbar a:hover {
            background-color: #45a049;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .celebration {
            margin-bottom: 20px;
        }
        .celebration h2 {
            color: #333;
        }
        .celebration p {
            color: #555;
        }
        .celebration img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="celebrations.php">Celebrations</a>
        <a href="contact.php">Contact</a>
    </div>

    <div class="container">
        <h1>Upcoming Celebrations</h1>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='celebration'>";
                echo "<h2>" . $row['title'] . "</h2>";
                echo "<p><strong>Date:</strong> " . $row['date'] . "</p>";
                echo "<p>" . $row['description'] . "</p>";
                if (!empty($row['image_url'])) {
                    echo "<img src='" . $row['image_url'] . "' alt='" . $row['title'] . "'>";
                }
                echo "</div>";
            }
        } else {
            echo "<p>No celebrations found.</p>";
        }
        ?>
    </div>
</body>
</html>