#!/usr/bin/php
<?php
	while (TRUE)
	{
		echo "Enter a number: ";
		$input = rtrim(fgets(STDIN));
		if (feof(STDIN) == TRUE)
		{
			echo("^D\n");
			exit();
		}
		if (is_numeric($input))
		{
			if ($input % 2 == 0)
			{
				echo "The number $input is even\n";
			}
			elseif($input % 2 != 0)
			{
				echo "The number $input is odd\n";
			}
		}
		else
		{
			echo "'$input' is not a number\n";
		}
	}
?>
