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

// $res = mysqli_query($link, "SET NAMES 'utf-8'");
// check for DB errors 
if(!$res){
	echo mysqli_error($link);
}

$sql = "SELECT * FROM teachers";
$res = mysqli_query($link, $sql);
// echo $sql;// if there was an error in the reques we can directly see it in the output 

echo mysqli_error($link);
// fetch the data from the return object
// change the db without interrupting the connceciton 
mysqli_select_db($link, "test");
	mysqli_close($link); 
// after we got the result we can close the connection 
	// we need to parse the result object to get the data out


















