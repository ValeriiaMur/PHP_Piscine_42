#!/usr/bin/php
<?php
function epur_str($str)
{
	$str = trim($str);
	$str = preg_replace('/\s+/', ' ', $str);
	return ($str);
}

if (count($argv) != 2)
{
	return ;
}

echo epur_str($argv[1]) . "\n";
?>
