#!/usr/bin/php
<?php

function ft_is_sort($arr)
{
	$a = $arr;
	$b = $arr;
	sort($b);
	if ($a == $b)
	{
		return true;
	}
	else
	{
		return false;
	}
}

?>
