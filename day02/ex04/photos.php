#!/usr/bin/php
<?php
$array = array();
if ($argc == 2)
{
	$str = file_get_contents($argv[1]);
	preg_match_all("/(<img ?)(.*?)(src=\"?)(.*?)(\"?)(>)/si",$str,$matches,PREG_PATTERN_ORDER);
	print_r($matches[0]);
	foreach($matches[0] as $kek)
	{
		if ($kek)
	}
}else if ($argc != 2) {
	$arg = $argc - 1;
	echo "There can be one argument\n";
} else if (!file_exists($argv[1])) {
	echo "Specified file doesn't exist\n";
}
?>