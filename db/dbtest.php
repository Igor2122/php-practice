<?php  


$link = mysqli_connect('localhost', 'root', 'root', 'web') or die ("Could not connect to db");

/* check for the conneciton error
	// if (!$link) {
	// 	echo mysquli_connect_errno();
	// 	echo "<br>";
	// 	echo mysquli_connect_error( );
	// } else {
	// 	echo 'hi there';
}*/ 

$res = mysqli_query($link, "SET NAME 'utf-8'");

if(!$res){
	echo mysqli_error($link);
}



// change the db without interrupting the connceciton 
mysqli_select_db($link, "test");

mysqli_close($link);
