<?php
include 'db_connect.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $pan = htmlspecialchars($_POST['pan']);
    $aadhar = htmlspecialchars($_POST['aadhar']);

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO donations (name, email, phone, address, city, pan, aadhar, country) VALUES (?, ?, ?, ?, ?, ?, ?, 'India')");
    $stmt->bind_param("sssssss", $name, $email, $phone, $address, $city, $pan, $aadhar);

    if ($stmt->execute()) {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Thank You</title>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body {
                    background-color: #f8f9fa;
                    padding: 20px;
                }
                .thank-you-container {
                    background-color: #ffffff;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    max-width: 600px;
                    margin: 0 auto;
                }
                .bank-details {
                    background-color: #e9ecef;
                    padding: 15px;
                    border-radius: 5px;
                    margin-top: 20px;
                }
            </style>
        </head>
        <body>
            <div class="thank-you-container">
                <h2 class="text-center">Thank you, ' . $name . ', for your willingness to donate!</h2>
                <p class="text-center">Please use the following bank details to make your direct bank transfer:</p>
                <div class="bank-details">
                    <p><strong>Account Name:</strong> RURAL INTEGRATED CHILDCARE AND EDUCATION TRUST</p>
                    <p><strong>Bank:</strong> ICICI BANK LTD. (CANTONMENT BRANCH, TRICHY 620001)</p>
                    <p><strong>Account Number:</strong> 620401068535</p>
                    <p><strong>IFSC Code:</strong> ICIC0006204</p>
                </div>
                <p class="text-center">After transferring, kindly send a confirmation email to us at <a href="mailto:support@yourngo.org">support@yourngo.org</a> with the transaction details.</p>
            </div>
        </body>
        </html>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $stmt->error . '</div>';
    }

    $stmt->close();
    $conn->close();
}
?>