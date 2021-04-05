<?php

 echo "Hello";
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
/*
	What is difference between using ' ' and " "
     '': Could not go for expression evaluation contentation
     "" : could go for expression evaluation

*/
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
  echo "\nHelloSir$name";

}
helloSir(" Deepak");

function addition($param1,$param2)
{
	return $param1+$param2;
}

print_r('\naddition(40,60)');


