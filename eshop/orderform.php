<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order </title>
</head>
<body>
	<h1>Order Form</h1>
	<form action="saveorder.php" method="post">
		<p>Customer: <input type="text" name="name" size="50" />
		<p>Customer's Email: <input type="text" name="email" 
					size="50" />
		<p>Phone Number: <input type="text" name="phone" 
						size="50" />
		<p>Shipping Adress: <input type="text" name="address" 
						size="100" />
		<p><input type="submit" value="Заказать" />
	</form>
</body>
</html>