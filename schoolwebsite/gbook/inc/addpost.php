<?php 

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = strip_tags($_POST["name"]);
			$email = strip_tags($_POST["email"]);
			$msg = strip_tags($_POST["msg"]);
	    // echo $name, $email, $msg;
	    
	    
		// Saving the data to DB 	
		$dbsadd = "INSERT  INTO  msgs  (name,  email,  msg)  
		VALUES  ('$name',  '$email',  '$msg')";
		
		// Sending values to DB
		$sendata = mysqli_query($link, $dbsadd);
		

		// prevent form submission on page reload
		header("Location: " . $_SERVER['REQUEST_URI']);
   		exit();

		}  
	