#!/usr/bin/php
<?php
$lil = explode(" ",$argv[1]);
$res = count($lil);
$i = 1;
$kek = array();
if ($res > 1)
{
	while($i<$res)
	{
		array_push($kek,$lil[$i]);
		$i++;
	}
	array_push($kek,$lil[0]);
	$fif = implode(" ",$kek);
	print("$fif\n");
}
else
{
	print("$argv[1]\n");
}
?>