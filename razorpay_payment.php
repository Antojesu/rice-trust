<?php
if (isset($_GET['donation_id']) && isset($_GET['amount'])) {
    $donation_id = $_GET['donation_id'];
    $amount = $_GET['amount'] * 100; // Convert to paise (₹500 → 50000)
}
?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<button id="pay-button">Pay ₹<?php echo $_GET['amount']; ?></button>
<script>
var options = {
    "key": "YOUR_RAZORPAY_KEY",
    "amount": "<?php echo $amount; ?>",
    "currency": "INR",
    "name": "Your Charity Name",
    "description": "Donation",
    "handler": function (response) {
        alert("Payment Successful. Payment ID: " + response.razorpay_payment_id);
        window.location.href = "thank_you.php?donation_id=<?php echo $donation_id; ?>&payment_id=" + response.razorpay_payment_id;
    },
    "prefill": {
        "name": "Donor Name",
        "email": "donor@example.com"
    },
    "theme": {
        "color": "#3399cc"
    }
};
document.getElementById('pay-button').onclick = function () {
    var rzp1 = new Razorpay(options);
    rzp1.open();
};
</script>