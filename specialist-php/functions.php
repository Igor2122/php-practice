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

	<div class="mt-5">
		

<?php 
		function math() {
			return [1,2,3];
		}
		
		list($one, $two, $three) = math(); // this works only with indes array
		// Opt 1
		echo $one, $two, $three;
		// Opt 2
		$arr2 = math()[2];// this option is availble from the V5.4
		echo $arr2;
 ?>

	</div>

</div>

<?php 
	include 'includes/footer.php';
 ?>


