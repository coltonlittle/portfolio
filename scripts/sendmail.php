<?php
		$name = $_POST["usrname"];
		$email = $_POST["usremail"];
		$phone = $_POST["usrphone"];
		$message = $_POST["usrmessage"];
		
		
		$tray = "A message from coltonlittle.com
		First Name: $name
		Email: $email
		Phone: $phone
		Message: $message";
		

		
	if (mail ("coltonalittle@gmail.com", "Colton Little // Contact", $tray, "FROM: $email")) {
	
			header("Location: thankyou.html");
			
		} else { 
		
		header("Location: error.html");
		}
	

?>