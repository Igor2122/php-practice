<HTML>
<HEAD>
	<TITLE>fopen</TITLE>
	</HEAD>
<BODY>
<?php 
	// open the file 
	/* $f = fopen('data.txt', 'r') or die ('Sorry can\'t open the file ');

	// echo fread($f, 5); // will read first 5 bytes 
	// echo fread($f, 3); // will read next 3 bytes from the above position 

	// echo "<br>";

	// fpassthru($f); // will return and echo all thy bytes 
	
	// here we read line by line 
	
	$lines = [];
	while($line = fgets($f)) {
		$lines[] = $line;
	} 
	 print_r($lines);

	//close the file
	// fclose($f);
	
	
	*/
	
	
	// read the file strip/keep some html tags 
	/*
	$t = fopen('data.html', 'r') or die ('Was not able to read the file');
	$html = [];
	while($txt = fgetss($t, 1024, '<a>')){
		$html[] = $txt; 
	}
	
	print_r($html);
	
	$f = fopen('data.txt', 'r') or die('Was not able to read the file');
	$bytes = [];
	while(!feof($f)){ // func reads untill the end of the file
		$bytes[] = fgetc($f); // reads by bytes
	}
	print_r($bytes);
	*/
	
	// WRITING TO THE FILE
	/*
	$f = fopen('data.txt', 'a+') or die('Was not able to read the file');
	
	fputs($f, PHP_EOL . "Line Six"); // PHP_EOL will add \n\r uniq to all oper systoms
	*/
	
	// SHORTHAND FOR READING THE FILES
	readfile('data.html');
	$lines = file('data.html');
	
	$file = file_get_contents('data.txt');
	echo $file;
	
	// SHORTHAND FOR WRITING THE FILES
	file_put_contents('data.txt', 'new content');// this will overwrite the file
	file_put_contents('data.txt', 'new content', FILE_APPEND);// will add to the end of the file 
 ?>
</BODY>
</HTML>