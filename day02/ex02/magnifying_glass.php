#!/usr/bin/php
<?php
if ($argc == 2 &&file_exists($argv[1]))
{
	$str = file_get_contents($argv[1]);
	$str = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/si",
	function($mat)
	{
		$mat[0] = preg_replace_callback("/(title=\")(.*?)(\")/mi",
		function($mat){
			return ($mat[1]."".strtoupper($mat[2])."".$mat[3]);
		},$mat[0]);
		$mat[0] = preg_replace_callback("/(>)(.*?)(<)/si",
		function($mat) {
			return ($mat[1]."".strtoupper($mat[2])."".$mat[3]);
		}, $mat[0]);
		return ($mat[0]);
	},$str);

	print("$str");
}else if ($argc != 2) {
	$arg = $argc - 1;
	echo "There can be only argument\n";
} else if (!file_exists($argv[1])) {
	echo "Specified file doesn't exist\n";
}
?>