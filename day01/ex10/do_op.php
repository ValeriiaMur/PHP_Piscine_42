#!/usr/bin/php
<?php

$num1 = trim($argv[1]);
$sign = trim ($argv[2]);
$num2 = trim($argv[3]);
$res = 0;
if ($sign == '*')
{
	$res = $num1 * $num2;
}
if ($sign == '+')
{
	$res = $num1 + $num2;
}
if ($sign== '-')
{
	$res = $num1 - $num2;
}
if ($sign == '/')
{
	$res = $num1 / $num2;
}
if ($sign == '%')
{
	$res = $num1 % $num2;
}
echo $res. "\n";

if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	exit (0);
}


 ?>
