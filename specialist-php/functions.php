<?php 
	include 'includes/header.php';
?>


<?php 
	$name = 'Mike';
	$h = '1';
	function say ($user='Guest	', $h=2){// $h2=2 - we set a default so we do not get an error
		echo "<h$h>Hi, $user</h$h>";
	}
?>


<div class="container mt-5">
	<?php 
		say($name, $h);
		say('Archie', 2);
		say('Guest');
		say('Guest');
		// calling funciton with a var, 
		$str = "say";
		$str();

	?>
</div>

<div class="container mt-5">
	<?php
	// STATIC VARIABLES
	 function foo(){
		static $x = 0;// this way $x will not loose it's value for ex: we can count how manytime function was called
		echo $x++;
	} 

	foo();
	foo();
	foo();


	?>

</div>

<?php 
	include 'includes/footer.php';
 ?>

<?php 
	include 'includes/header.php';
?>
