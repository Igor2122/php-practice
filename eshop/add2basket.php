<?php
	
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
	
	// if ($_SERVER["REQUEST_METHOD"] == "GET") {
	// }
	    $id = $_GET['id'];
		echo $id;
	
	if($id){
		add2Basket($id);
		header("Location: catalog.php");
		exit;
	}
	
	

	
	