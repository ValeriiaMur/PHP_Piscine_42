#!/usr/bin/php
<?php

function spaces($input)
{
	$output = trim(preg_replace('!\s+!', ' ', $input));;
	return ($output);
}

echo spaces($argv[1]) . "\n";

 ?>
