#!/usr/bin/php
<?php

function rostring($str)
{
	$arr = explode(' ',trim($str));
	$len = count($arr);
	for ($i = 1; $i < $len; $i++)
	{
	 		echo $arr[$i];
			echo ' ';
	}
	echo $arr[0];
}

echo rostring($argv[1]) . "\n";

 ?>
