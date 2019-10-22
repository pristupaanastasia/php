#!/usr/bin/php
<?php
$v1 = 0;
foreach ($argv as $arg) {
	if ($v1 != 0)
	{
		print("$arg\n");
	}
	$v1 = 1;
}
?>