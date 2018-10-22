<?php 

/**
 * 			
 */
class Pet
{
	public $name;
	public $age = 'dog is 4 years old';
	function say()
	{
		echo "object said his name is $name";
	}
	function age ()
	{
		echo $this->$age;
	}
}
$cat = new Pet();
$dog = new Pet();

// echo gettype($cat);
// echo $cat->age = 5;
// echo $cat->name = 'Archie';
$cat->say();
$dog->age();