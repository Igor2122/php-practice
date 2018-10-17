<HTML>
<HEAD>
	<TITLE>fopen</TITLE>
	</HEAD>
<BODY>
<?php 
	// open the file 
	$f = fopen('data.txt', 'r') or die ('Sorry can\'t open the file ');

	echo fread($f, 5); // will read first 5 bytes 
	echo fread($f, 3); // will read next 3 bytes from the above position 

	echo "<br>";

	fpassthru($f); // will return and echo all thy bytes 

	//close the file
	fclose($f);
 ?>
</BODY>
</HTML>