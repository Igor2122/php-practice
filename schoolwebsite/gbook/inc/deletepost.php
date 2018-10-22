<?php 

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
	    $del = $_GET['id'];
	    $sqldel = "DELETE FROM msgs WHERE id=$del ";
	    $res = mysqli_query($link, $sqldel);
	}