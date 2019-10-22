#!/usr/bin/php
<?php
$v1 = 0;
$kek = array();
foreach ($argv as $arg) {
	if ($v1 != 0)
	{
		$arg = trim($arg);
		$lil = explode(" ",$arg);
		foreach($lil as $jij)
		{
			array_push($kek,$jij);
		}
	}
	$v1++;
}
sort($kek);
foreach ($kek as $y)
{
	print("$y\n");
}
?>