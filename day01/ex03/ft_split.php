#!/usr/bin/php
<?php
function ft_split($string)
{
	$tab = array_filter(explode(" ", $string));
	if ($string != NULL)
		sort($tab);
	return($tab);
}
?>
