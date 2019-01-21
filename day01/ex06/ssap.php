#!/usr/bin/php
<?php

function ft_split($string)
{
	$tab = array_filter(explode(" ", $string));
	return($tab);
}
$tab = array();
for ($i = 1; $i < $argc; $i++)
{
	$split = ft_split($argv[$i]);
	foreach($split as $elem)
	{
		array_push($tab, $elem);
	}
}
sort($tab);
foreach($tab as $elem)
{
	echo "$elem\n";
}

?>
