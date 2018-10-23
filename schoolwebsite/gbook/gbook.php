<?php
/* Min Settings */

	include_once 'inc/db.php';

	// checking to see if all inputs are set
	if(!empty($_POST['name'] || !empty($_POST['email'] || !empty($_POST['msg'])))){
		
	
	
	
	// adding post to DB 
	include_once 'inc/addpost.php';
		
	} else {
		 $alert = 'Please input the credentials';
	}
	
	
	// Deleting database entries
	include_once 'inc/deletepost.php';
	
	
	include_once 'layout/header.php';
?>



<h3>Please leave your comments in our guest book</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
	Name: <br /><input type="text" name="name" /><br />
	Email: <br /><input type="text" name="email" /><br />
	Message: <br /><textarea name="msg"></textarea><br />
	<br />
	<input type="submit" value="Add Post" />
</form>


<?php
	$sql = "SELECT  id,  name,  email,  msg,  UNIX_TIMESTAMP(datetime)  as  dt 
		FROM  msgs  
		ORDER  BY  id  DESC";
		// pull the db query		
		$res = mysqli_query($link, $sql);
?>
<p>You have left: of comments on our webiste</p>

<div class="flex">
	<?php foreach($res as $post) :?>
		<div class="card">
			<div class="date-time">
			  <h4><?= date('m/d/Y', $post['datetime']) ?></h4>
			  <small><?= $post['id']?></small>
			</div>
			  <img src="http://media.npr.org/assets/news/2009/10/27/facebook1_sq-17f6f5e06d5742d8c53576f7c13d5cf7158202a9.jpg?s=16" alt="img icon" />
			  <h1><?php 
			  if(!$post['name'])
				echo 'No name';
			  else 
				echo $post['name'];
			  ?></h1>
			  <p>
			  	<?= (!$post['msg']) ?  'No message' :  $post['msg']; ?>
			  	</p>
			<a href="gbook.php?id=<?= $post['id'] ?>"><button>Delete Post</button></a>
			<a href="update.php?id=<?= $post['id'] ?>"><button> Update</button></a>
		</div>
	<?php endforeach; ?>
</div>
</body>
</html>