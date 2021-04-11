<?php
//Varibles Scope
//Global
$x=10;
$y=10;

//Object
class Car {
	public $color;
	public __construct($color)
	{
	  $this->color=$color;
	}
	
	public function printColor()
	{
		echo "\n";
		echo #color;
	}
}
echo "Class Output";
$job = new Car("Red");
$job-> printColor();
function test()
{
global $x,$y;
 $y=$x+$y;

echo $y;

}

test();

function increment()
{
  static $number=0;
  echo "\n $number ";
  $number++;
}
increment();
increment();
increment();
increment();
increment();

//Math Methods
echo "\n";
echo pi();
echo "\n";
echo abs(-16);
echo "\n";
echo sqrt(64);
echo "\n";
echo round(10.5);
echo "\n";
echo rand();
echo "\n";
echo rand(10,100);
//Cosntants in PHP
echo "\n";
define("GREETING","Hello friends how are u?");
echo GREETING;

echo "\n";
function Test1()
{
 echo GREETING;
}
Test1();
echo "\n";
define("cars",["Maruti","Skoda","BMW"]);
echo cars[0];

//String functions
echo "\n";
echo strlen("Hello World");
echo "\n";
echo str_word_count("Hello World");
echo "\n";
echo strrev("Hello World");
echo "\n";
echo strpos("Hello World","World");
echo "\n";
$a=10;
$b=20;

//Arrays in PHP
$cars = array("Maurti","Volvo","Suzuki","BMW","Skoda");
echo var_dump($cars);

//Globals


function globalArrayTest()
{
	$GLOBALS['a'] = $GLOBALS['b']+ $GLOBALS['a'];
	

}
echo "\n Global Addition";
globalArrayTest();
echo "\nAddition $a";
/* echo "Hello";
 print_r("\nGood Morning");
//Variables in PHP Naming conventions
//Name could not contains special characters and space
//Name could not start with number
//Name could start with _
//Name could letter only

//Variables
$name ="Deepak";
echo "\n$name";

$number =10;



echo "\nNumber=$number";

//	What is difference between using ' ' and " "
//     '': Could not go for expression evaluation contentation
//     "" : could go for expression evaluation


//Artimatics Operators
//+
$a = 40;
$b = 30;
$c = $a+$b;
print_r("\nSum=$c");
//-
$a=90;
$b=40;
$c=$a-$b;
print_r("\n$a-$b=$c");
//* Multiply
$a=90;
$b=5;
$c=$a*$b;
echo "$\na*$b=$c";



function helloSir($name)
{
  echo "\nHelloSir{$name}";

}
helloSir(" Deepak");

function addition($param1,$param2)
{
	return $param1+$param2;
}

print_r('\naddition(40,60)');

function getGreaterNumberBetweenThree($number1,$number2,$number3)
{
	$result ="";
	if($number1>$number2 && $number1>$number3)
	{
		$result="Number is Greater $number1";
	}
	else if($number2>$number3)
	{
             $result="Number is Greater $number2";
	}	
	else 
	{
		 $result="Number is Greater $number3";
	}
return $result;

}
echo "\n";
echo getGreaterNumberBetweenThree(100,130,50);

echo "\n";
function greaterNumberUsingTernaryOperator($number1,$number2,$number3)
{
	
	$result = (($number1>$number2) && ($number1> $number3)) ? "Number 1 is Greater $number1" : $number2>$number3 ? "Number 2 is Greater $number2" : "Number 3 is Greater $number3";
return $result;
}
echo greaterNumberUsingTernaryOperator(500,150,250);


function printArrayValues($numbers)
{



}*/