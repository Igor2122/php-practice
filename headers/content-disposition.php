<?php 
// here we tell him the type of the file 
    header("Content-type: file/octet-stream");
// will download the file on the page load  
    header("Content-disposition: attachment; filemane=\"mytext.txt\"")

?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>My Page</h1>
</body>
</html>