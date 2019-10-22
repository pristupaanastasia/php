#!/usr/bin/php
<?php
$v1 = 0;
$zif = array();
$alf = array();
$inv = array();
foreach ($argv as $arg) {
	if ($v1 != 0)
	{

		$lil = explode(" ",$arg);
		foreach($lil as $jij)
		{
			array_push($kek,$jij);
		}
	}
	$v1++;
}
foreach($kek as $lol)
{
	if (preg_match("/(\d+)/"))
	{

	}
}
print_r($kek);
?>