

<?php 

			// DB connection 
			include_once 'inc/db.php';
			
			
			
            $postId =  $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = strip_tags($_POST["name"]);
			$email = strip_tags($_POST["email"]);
			$msg = strip_tags($_POST["msg"]);
			
			echo $name, $email, $msg;
            
    	    $squlupadte = "UPDATE msgs SET (name,  email,  msg)
    	    VALUES  ('$name',  '$email',  '$msg')
    	    WHERE id=$postId ";
    	    
    	    echo $postId;
    	    
    	    
    	    mysqli_query($link, $squlupadte);
    	    
			
    	    
    	    // header("Location: " . $_SERVER['REQUEST_URI']);
   	    	// exit();
    }
?>




<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
	Name: <br /><input type="text" name="name" /><br />
	Email: <br /><input type="text" name="email" /><br />
	Message: <br /><textarea name="msg"></textarea><br />
	<br />
	<input type="submit" value="Add Post" />
</form>

