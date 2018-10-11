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
		say(ucfirst('archie'), 2);
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
			// return [1,2,3];
		}
		
		list($one, $two, $three) = math(); // this works only with indes array
		// Opt 1
		echo $one, $two, $three;
		// Opt 2
		$arr2 = math()[2];// this option is availble from the V5.4
		// echo $arr2;
 ?>

	</div>
	
<div class="mt-5 bg-secondary">
	<h1>Hi there</h1>

<?php 
		$string = [1,2,3,4];
		$emptyArr = [];
		
		
		
		function my_count ($var, $mode=0) {
		 if(is_null($var)) return 0;
		 if(!is_array($var)) return 1;
		 
			$count = 0; 
			foreach($var as $val){
				if(is_array($val) && $mode = 1)
					$cnt = my_count($v, 1);
				$count++;
			}
			return $count;
		}
		
		// my_count($emptyArr);
		// my_count($string);
		
		for($i = 0; $i <= my_count($string); $i ++ ) {
			static $cnt = 0;
			echo $cnt ++;
			echo "<h1>$string[$i]</h1>";
		}
 ?>

	</div>
	
	<div class="mt-5 bg-info">
		
		<?php 
		
			function foo123() {
				echo func_num_args() . "<br>"; // return the # of passed elements 
				print_r( func_get_args()) . "<br>";
				echo func_get_arg(2) . "<br>";
			}
			
			foo123(1,2,3,4,5);
		?>
	</div>
	<div class="mt-5 bg-warning">
		
		<?php 
		
			function tpHinting(array $param) {}// here we say that it has to be array type only, the rest will throw an error
			tpHinting($string);
			
			function bar($usr){
				echo "Hi there $usr";
			}
			
			function callAbale(callable $para, $par ){
				$para($par);
			}
			
			callAbale("bar", 'igor');
			
			
		?>
	</div>
	
	<div class="mt-5 bg-success">
		
		<?php 
			
			//$date =  getdate(1439264085);// here we can pass timestamp and we can use it later on to see how long for expmpale the cusotmer was using our servies 
			// OR WE CAN USE TIME!!
			$date = time();
			echo $date;
			
			// to set future time
			$ftdate = mktime();
			
		?>
	</div>

</div>

<?php 
	include 'includes/footer.php';
 ?>


