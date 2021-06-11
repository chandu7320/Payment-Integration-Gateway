
<?php
	$apikey = "rzp_test_ZC5Z0wPkx4u7sU";
?>
<form action="success.php" method="POST">

<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apikey; ?>" 
    data-amount="<?php echo $_POST['Amount'] * 100; ?>" 
    data-currency="INR"
    data-buttontext="Pay"
    data-name="Chandradip Foundation"
    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
    data-image="img\logo.png"
    data-prefill.name="<?php echo $_POST['Name']; ?>"
    data-prefill.email="<?php echo $_POST['Email']; ?>"
	data-prefill.contact="<?php echo $_POST['Contact']; ?>"
    data-theme.color="#00d0ff"
	
></script>
<input type="hidden" value="<?php echo $_POST['Name']; ?>" name="Name">
<input type="hidden" value="<?php echo $_POST['Email']; ?>" name="Email">
<input type="hidden" value="<?php echo $_POST['Contact']; ?>" name="Contact">
<input type="hidden" value="<?php echo ("order_CgmcjRh9ti2lP7"); ?>" name="O_id">
</form>