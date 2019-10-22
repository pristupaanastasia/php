#!/usr/bin/php
<?php
function ft_split($ar)
{
	$ar= explode(" ", $ar);
	sort($ar);
	if (!count($ar) || !$ar[0])
			return(NULL);
	return $ar;
}
?>