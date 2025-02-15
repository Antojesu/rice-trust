<?php
if (isset($_GET['donation_id']) && isset($_GET['amount'])) {
    $donation_id = $_GET['donation_id'];
    $amount = $_GET['amount'];
}
?>
<form action="https://www.paypal.com/donate" method="post">
    <input type="hidden" name="business" value="your-paypal-email@example.com">
    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="return" value="thank_you.php?donation_id=<?php echo $donation_id; ?>">
    <input type="submit" value="Pay with PayPal">
</form>