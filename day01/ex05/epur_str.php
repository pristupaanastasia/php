#!/usr/bin/php
<?php
if ($argc> 1)
{
	$res = preg_replace("/\s+/", " ", $argv[1]);
	print(trim("$res"));
	print("\n");
}
?>