<?php $pagename="Thank You"; ?>

<?php include("php/head.php"); ?>

<?php include("php/topnav.php"); ?>
<style>
	.wrapper p{
		font-size: .7em;
	}

</style>
<div class="wrapper">
	<form>
		<h3>Thank You for your donation!</h3>

		<?php
	       	$to="devries.leah@gmail.com";
	       	$subject="Message from Contact Form";
	       	$message=$_POST["firstname"] . " " . $_POST["lastname"]." ". "sent a comment.\r\n";
	       	$message .= $_POST["comments"] . " \r\n" . "\r\n";
	       	$message .= $_POST["email"] . "\r\n";
	       	$message .= $_POST["firstname"] . " " . $_POST["lastname"]. "\r\n";
	       	$message .= $_POST["address"] . "\r\n";
	       	$message .= $_POST["city"] . " " . $_POST["province"]. "\r\n";
	       	$message .= $_POST["postal-code"] . " " . $_POST["country"]. "\r\n";
	       	$message .= $_POST["telephone"]. "\r\n";
	       	$message .= $_POST["donationAmount"]. "\r\n";
	       	$from= $_POST["email"];
	       	mail($to,$subject,$from,$message);
	       ?>

	       <p>Hi <?php echo $_POST["firstname"] ?> <?php echo $_POST["lastname"] ?></p>
	       <p>A confirmation email has been sent to <?php echo $_POST["email"] ?></p>
	       <p>You donated<?php echo $_POST["donationAmount"] ?></p>

	       <h3>Your Address is:</h3>
	       <p><?php echo $_POST["address"] ?></p>
	       <p><?php echo $_POST["city"] ?><br/>
	       <?php echo $_POST["province"] ?><br/>
	       <?php echo $_POST["country"] ?><br/>
	       <?php echo $_POST["postal-code"] ?><br/>
	       <?php echo $_POST["telephone"] ?></p>

	       <h3>Comments</h3>
	       <p><?php echo $_POST["comments"] ?></p>
	</form>
</div> <!--wrapper->
<style></style

<?php include("php/footer.php"); ?>