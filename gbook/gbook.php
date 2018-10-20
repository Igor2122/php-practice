<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
				.flex {
					display: flex;
  align-items: flex-start;
  flex-wrap: wrap;
				}
				.card{
		width: 350px;
		border: 1px solid gray;
		box-shadow: 1px 1px 3px #888;
		border-top: 10px solid green;
		min-height: 250px;
		padding-: 10px;
		margin: 10px;
		}
		
		img{
		  border-radius: 50%;
		  width: 70px;
		  margin: 10px;
		}
		
		h1{
		  font-weight: lighter;
		  margin-left: 100px;
		  margin-top: -70px;
		}
		
		p{
		  margin: 10px;
		  font-family: segoe ui;
		  line-height: 1.4em;
		  font-size: 1.2em;
		}
		
		#mainbox{
		  font-family: calibri;
		  box-sizing: border-box;
		  justify-content: center;
		  display: flex;
		flex-wrap: wrap;
		}
	</style>
</head>
<body>
	
<?php
/* Основные настройки */

	define("DB_HOST", "localhost");
	define("DB_LOGIN", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "gbook");
// $link = mysqli_connect("DB_HOST", "DB_LOGIN", "DB_PASSWORD", "DB_NAME");
// $link = mysqli_connect("localhost", "root", "", "gbook");

	$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

	


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = strip_tags($_POST["name"]);
	$email = strip_tags($_POST["email"]);
	$msg = strip_tags($_POST["msg"]);
    // echo $name, $email, $msg;
}


/* Основные настройки */

/* Сохранение записи в БД */
	
	$dbsadd = "INSERT  INTO  msgs  (name,  email,  msg)  
	VALUES  ('$name',  '$email',  '$msg')";
	
	// added values to db
	mysqli_query($link, $dbsadd);
	// echo $dbsadd;
	
/* Сохранение записи в БД */

/* Удаление записи из БД */

/* Удаление записи из БД */
?>
<h3>Please leave your comments in our guest book</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Name: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Message: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Send!" />

</form>
<?php

$sql = "SELECT  id,  name,  email,  msg,  UNIX_TIMESTAMP(datetime)  as  dt 
	FROM  msgs  
	ORDER  BY  id  DESC";
	// echo $sql; // tested all working 
	
	
	$count = 0;
	while(mysqli_fetch_array($res, MYSQLI_ASSOC)){ // will return both arra associative and indexed 
		$count ++;
		return $count;
	}
	mysqli_close($link);
	
?>

<p>You have left: <?= $count ?> of comments on our webiste</p>
<div class="flex">
	<?php foreach($res as $post) :?>
		<div class="card">
		<div class="date-time">
		  <h2><?= $post['datetime']?></h2>
		  <small><?= $post['id']?></small>
		</div>
		  <img src="http://media.npr.org/assets/news/2009/10/27/facebook1_sq-17f6f5e06d5742d8c53576f7c13d5cf7158202a9.jpg?s=16" alt="" />
		  <h1><?php 
		  if(!$post['name'])
			echo 'No name';
		  else 
			echo $post['name'];
		  ?></h1>
		  <p>
		  	<?php 
		  if(!$post['msg'])
			echo 'No message';
		  else 
			echo $post['msg'];
		  ?>
		  	</p>
		</div>
	<?php endforeach; ?>
</div>

</body>
</html>