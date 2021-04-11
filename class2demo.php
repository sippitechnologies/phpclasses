<?php
class Car{
	public $color;
	public $model;
	static $name = "Delhi";
	function __construct($color="Red",$model="i10")
	{
		
		$this->color=$color;
		$this->model = $model;

	}
	
	function printCar()
	{
		echo "Car Color:{$this->color}"."{$this->model}".self::$name;
	}
	static function testing()
	{
		echo __CLASS__;
		echo "\n";
		echo __FUNCTION__;
echo "\n";
		echo __METHOD__;
		echo "\n";
		echo self::$name;
	}


}
class Animal
{
	public $color;
	protected $protectedtesting="Testing";
	public $age;
	public $name;
	function printAnimal()
	{
		echo "Name:{$this->name}"."Age:{$this->age}"."Color:{$this->color}".;
	}
	

}
class Dog extends Animal
{
	
	function setColor($color)
	{
	  $this->color = $color;
	}
	function setName($name)
	{
		$this->name=$name;
	}
	function setAge($age)
	{
		$this->age=$age;

	}

}

$dog = new Dog();
$dog->setColor("Red");

echo "Dog Color:{$dog->color}";
//$car = new Car();
//$car1 = new Car("Yellow","i20");
//$car->printCar();
//$car1->printCar();
//Car::testing();
//echo Car::$name;





?>