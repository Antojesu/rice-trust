<?php
// Define the correct credentials
$correct_email = "admin@gmail.com";
$correct_password = "00000000";

// Initialize error message
$error_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form submission
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate email and password
    if ($email === $correct_email && $password === $correct_password) {
        // Redirect to a dashboard page or homepage
        header("Location: dashboard.php");
        exit();
    } else {
        // Set error message if login fails
        $error_message = "Invalid email or password.";
    }
}
?>