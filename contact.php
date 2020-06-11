<?php

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$to='singhkgp47@gmail.com';
		$subject='Form Submission';
		$message="Name: ".$name."\n"."Message: ".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", I will contact you shortly!</h1>";
			
		}
	}

?>