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

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/'; // Directory to store uploaded images
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true); // Create the directory if it doesn't exist
        }

        $imageName = basename($_FILES['image']['name']);
        $imagePath = $uploadDir . uniqid() . '_' . $imageName; // Unique filename to avoid conflicts

        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            // Insert into database
            $stmt = $conn->prepare("INSERT INTO celebrations (title, description, start_time, end_time, image_path) VALUES (:title, :description, :start_time, :end_time, :image_path)");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':start_time', $start_time);
            $stmt->bindParam(':end_time', $end_time);
            $stmt->bindParam(':image_path', $imagePath);
            $stmt->execute();

            // Redirect to the main page
            header("Location: index.php");
            exit();
        } else {
            echo "<p>Failed to upload image.</p>";
        }
    } else {
        echo "<p>No image uploaded or an error occurred.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Add Special Celebration</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        <label for="start_time">Start Time:</label>
        <input type="datetime-local" id="start_time" name="start_time" required><br><br>
        <label for="end_time">End Time:</label>
        <input type="datetime-local" id="end_time" name="end_time" required><br><br>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>
        <button type="submit">Add Celebration</button>
    </form>
</body>
</html>