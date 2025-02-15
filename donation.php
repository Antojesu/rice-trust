<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .donation-form, .indian-form, .foreign-form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h2 { text-align: center; color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; }
        input, select, button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #28a745;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 8px;
            text-align: center;
        }
        .popup button { margin: 10px; }
        .animation {
            display: none;
            width: 200px;
            height: 200px;
            margin: 20px auto;
            background: url('donate.jpg') no-repeat center;
            background-size: contain;
        }
        .indian-form, .foreign-form { display: none; }
    </style>
</head>
<body>
    <div class="donation-form">
        <h2>Donate to Our Cause</h2>
        <button onclick="openPopup()">Donate Now</button>
    </div>
    
    <div id="donationPopup" class="popup">
        <p>Are you an Indian Citizen/NRI or a Foreign Citizen?</p>
        <button onclick="showIndianForm()">Indian Citizen/NRI</button>
        <button onclick="showForeignForm()">Foreign Citizen</button>
        <div id="animation" class="animation"></div>
    </div>

    <!-- Indian donation form -->
    <div id="indianForm" class="indian-form">
        <h2>Indian Citizen Donation Form</h2>
        <form action="indian_donation_process.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email ID</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone No</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="pan">PAN No *</label>
                <input type="text" id="pan" name="pan" required>
            </div>
            <div class="form-group">
                <label for="aadhar">Aadhar No</label>
                <input type="text" id="aadhar" name="aadhar">
            </div>
            <button type="submit">Proceed to Payment</button>
        </form>
    </div>

    <!-- Foreign donation form -->
    <div id="foreignForm" class="foreign-form">
        <h2>Foreign Citizen Donation Form</h2>
        <form action="foreign_donation_process.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" required>
            </div>
            <div class="form-group">
                <label for="passport">Passport Number</label>
                <input type="text" id="passport" name="passport" required>
            </div>
            <button type="submit">Proceed to Payment</button>
        </form>
    </div>

    <script>
        function openPopup() {
            document.getElementById("donationPopup").style.display = "block";
        }
        function showIndianForm() {
            document.getElementById("animation").style.display = "block";
            setTimeout(() => {
                document.getElementById("donationPopup").style.display = "none";
                document.getElementById("indianForm").style.display = "block";
            }, 2000);
        }
        function showForeignForm() {
            document.getElementById("animation").style.display = "block";
            setTimeout(() => {
                document.getElementById("donationPopup").style.display = "none";
                document.getElementById("foreignForm").style.display = "block";
            }, 2000);
        }
    </script>
</body>
</html>