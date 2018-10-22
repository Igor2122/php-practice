<?php 

class Pet
{
	public $name;
	public $age;
	public $type;
	
	function say ($w)
	{
		echo "{$this->name} says $w" . "<br>";
		$this->drawLine();
	}

	function drawLine ()
	{
		echo "<hr>";
	}

	// function __construct($type)
	// {
	// 	// $this->type = $type; 
	// 	echo "$type CREATED";
	// 	$this->drawLine();
	// }
}
$cat = new Pet();
$dog = new Pet();

$cat->$name = 'Archie';
$dog->$name = 'Woolfie';
// echo gettype($cat);
// echo $cat->age = 5;
// echo $cat->name = 'Archie';
// $cat->say();

$dog->say('woolfie-woolfie-woolfie');
$cat->say('woof');