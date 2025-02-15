<?php
// Database connection
$host = 'localhost'; // Replace with your database host
$dbname = 'donation_db'; // Replace with your database name
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $address = htmlspecialchars($_POST['address']);
        $city = htmlspecialchars($_POST['city']);
        $country = htmlspecialchars($_POST['country']);
        $passport = htmlspecialchars($_POST['passport']);

        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO foreign_donations (name, email, phone, address, city, country, passport) VALUES (:name, :email, :phone, :address, :city, :country, :passport)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':passport', $passport);

        if ($stmt->execute()) {
            echo "<h2>Thank you, $name, for your donation!</h2>";
            echo "<p>Your details have been successfully recorded.</p>";
        } else {
            echo "<p>Error: Unable to process your donation. Please try again later.</p>";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null; // Close the connection
?>