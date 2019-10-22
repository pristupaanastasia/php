#!/usr/bin/php
<?php
echo 'Enter a number: ';
while (($s = fgets(STDIN, 255)) != false)
{
	$s = trim($s,"\n");
	if (!preg_match('/^-?\d+\.?\d*$/', $s))
	{
    	print("$s is not a number\n");
	}
	else
	{
		if ((int)$s % 2 == 0)
		{
			print("The number $s is even\n");
		}
		else
		{
			print("The number $s is odd\n");
		}
	}
	print("Enter a number: ");
}
if ($s == false)
{
	print("^D\n");
}
?>