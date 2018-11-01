<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Catalogue</title>
</head>
<body>
<p>Number of itmes in Basket <a href="basket.php">Basket</a>: <?= $count?></p>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>Name</th>
	<th>Author</th>
	<th>Publication Year</th>
	<th>Price $.</th>
	<th>Add to Basket</th>
</tr>
<?php
	$goods = selectAllItems();
?>
	<?php foreach($goods as $item) : ?>
	
	<tr> 
		<td><?= $item['title']?></td> 
		<td><?= $item['author']?></td> 
		<td><?= $item['pubyear']?></td> 
		<td><?= $item['price']?></td> 
		<td>
			<a href="https://php-practice-igdevelopers.c9users.io/eshop/add2basket.php? $id=<?= $item['id'] ?> ">Add to Busket</a> 
		</td>
		
	</tr>
	
	<?php endforeach ?>

</table>
</body>
</html>