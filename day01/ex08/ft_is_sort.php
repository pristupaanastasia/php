#!/usr/bin/php
<?php
function ft_is_sort($ar)
{
	$kek = sort($ar);
	if ($ar == $kek)
		return true;
	else
		return false;
}
?>