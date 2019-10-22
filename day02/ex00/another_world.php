#!/usr/bin/php
<?php
$res = preg_replace("/\s+/", " ", $argv[1]);
$res = preg_replace("/\t+/", " ", $argv[1]);
print(trim("$res"));
print("\n");
?>