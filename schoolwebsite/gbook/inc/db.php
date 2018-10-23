<?php 

	define("DB_HOST", "localhost");
	define("DB_LOGIN", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "gbook");

	if(mysqli_connect_error()){
		echo "OOPS, something went wrong" . mysqli_connect_error();
	} else {
	// Connecting to DB
		$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
	}
