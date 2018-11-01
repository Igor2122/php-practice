<?
require_once "secure/session.inc.php";
require_once "secure/secure.inc.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Admin Page</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Manage your shop</h1>
	<h3>Actions</h3>
	<ul>
		<li><a href='add2cat.php'>Add Product to Catalogue</a></li>
		<li><a href='orders.php'>Prepared orders</a></li>
		<li><a href='secure/create_user.php'>Add User</a></li>
		<li><a href='index.php?logout'>Finish Session</a></li>
	</ul>
</body>
</html>