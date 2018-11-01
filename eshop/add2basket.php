<?php
	
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
	
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
	    $del = $_GET['id'];
	}
	
	