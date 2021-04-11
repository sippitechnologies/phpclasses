<?php
class Calculator
{
	private $number1;
	private $number2;
	private $number3;
	
	function __construct($number1,$number2,$number3)
	{
		$this->number1=$number1;
		$this->number2=$number2;
		$this->number3=$number3;

	}
	function addition()
	{
		return $this->number1+$this->number2;
	}
function minus()
	{
		return $this->number1-$this->number2;
	}
function division()
	{
		return $this->number1/$this->number2;
	}
function multiply()
	{
		return $this->number1*$this->number2;
	}
function mode()
	{
		return $this->number1%$this->number2;
	}
function expont()
{
	return $this->number1**$this->number2;

}

function printTableofNumber($number)
{
	echo "Printing the Table of $number"."\n";
	for($i=1;$i<=10;$i++)
	{
		echo "{$number}"."*"."{$i}"." = ".$number*$i."\n";
	
	}

}

function printingTablesofGivenNumbers($numbers)
{
	foreach($numbers as $val)
	{
		$this->printTableofNumber($val);
	}

	
}

}

class Calculator1
{
	
	static function addition($number1,$number2)
	{
		return $number1+$number2;
	}
static function minus($number1,$number2)
	{
		return $number1+$number2;
	}
static function division ($number1,$number2)
	{
		return $number1/$number2;
	}
static function multiply ($number1,$number2)
	{
		return $number1*$number2;
	}
static function mode ($number1,$number2)
	{
		return $number1%$number2;
	}
static function expont($number1,$number2)
	{
		return $number1**$number2;
	}

function printTableofNumber($number)
{
	echo "Printing the Table of $number"."\n";
	for($i=1;$i<=10;$i++)
	{
		echo "{$number}"."*"."{$i}"." = ".$number*$i."\n";
	
	}

}

function printingTablesofGivenNumbers($numbers)
{
	foreach($numbers as $val)
	{
		$this->printTableofNumber($val);
	}

	
}

}


$calculator = new Calculator(50,9,70);
echo "Addtion:".$calculator->addition()."\n";
echo "Subtraction:".$calculator->minus()."\n";
echo "Division:".$calculator->division()."\n";
echo "Multiply:".$calculator->multiply()."\n";
echo "Mode:".$calculator->mode()."\n";
echo $calculator->printTableofNumber(50);
echo $calculator->printingTablesofGivenNumbers([10,20,100,500,600,900]);
echo "Static Mode:".Calculator1::mode(50,9);
?>
