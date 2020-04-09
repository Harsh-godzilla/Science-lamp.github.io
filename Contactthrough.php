<?php

if (isset($_POST['submit']))  {
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "harshch410@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You Have Received An E-Mail From ".$name.".\n\n".$message;

	mail($mailTo, $txt, $headers);
	header("Location: index.php?mailsend");
}