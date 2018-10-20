<?php  


$link = mysqli_connect('localhost', 'root', '', 'web') or die ("Could not connect to db");

 //check for the conneciton error
/*	if (!$link) {
		echo mysquli_connect_errno();
		echo "<br>";
		echo mysquli_connect_error( );
	} else {
		echo 'hi there';
	} 
*/

// $res = mysqli_query($link, "SET NAMES 'utf-8'");
// check for DB errors 
// if(!$res){
// 	echo mysqli_error($link);
// }

$sql = "SELECT * FROM teachers";
$res = mysqli_query($link, $sql);
// echo $sql;// if there was an error in the reques we can directly see it in the output 

// !!in case we get a search query we need to pass it through the function: 
$name = mysqli_real_escape_string($link, "O'Brian");
$req = "SELECT * FROM teachers
			WHERE name = '$name'";
// echo $req;


mysqli_close($link); // after we got the result we can close the connection 
	
// we need to parse the result object to get the data out
while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){ // will return both arra associative and indexed as as default
	// print_r($row);
	// echo count($row);
}





















