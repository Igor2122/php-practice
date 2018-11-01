<?php
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Received Orders</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Received Orders:</h1>
<?php

?>
<hr>
<h2>Order number: </h2>
<p><b>Cutomer</b>: </p>
<p><b>Email</b>: </p>
<p><b>Telephone number:</b>: </p>
<p><b>Shipping Adress:</b>: </p>
<p><b>Order Date</b>: </p>

<h3>Purchased Goods:</h3>
<table border="1" cellpadding="5" cellspacing="0" width="90%">
<tr>
	<th>Number</th>
	<th>Name</th>
	<th>Author</th>
	<th>Publication Year</th>
	<th>Price $.</th>
	<th>Quantity</th>
</tr>


</table>
<p>Total Orders Ammount: $.</p>

</body>
</html>