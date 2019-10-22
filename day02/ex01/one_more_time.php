#!/usr/bin/php
<?php
date_default_timezone_set("Europe/Paris");
$preg = preg_match("/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[jJ]eudi|[vV]endredi|[sS]amedi|[dD]imanche) ([0-9]|1[0-9]|2[0-9]|3[0-1]) ([jJ]anvier|[fF]evrier|[mM]ars|[aA]vril|[mM]ai|[jJ]uin|[jJ]uillet|[aA]out|[sS]eptembre|[oO]ctobre|[nN]ovembre|[dD]ecembre) ([0-9]{4}) (([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9]))$/", $argv[1], $matches);
$arr = explode(" ",$argv[1]);
if ($argc <2)
{
	exit(0);
}
$m = array(
	"1" => "Janvier",
	"2" => "Fevrier",
	"3" => "Mars",
	"4" => "Avril",
	"5" => "Mai",
	"6" => "Juin",
	"7" => "Juillet",
	"8" => "Aout",
	"9" => "Septembre",
	"10" => "Octobre",
	"11" => "Novembre",
	"12" => "Decembre");
if (!$preg)
	print("Wrong Format\n");
else
{
	$jd = cal_to_jd(CAL_GREGORIAN, array_search($arr[2], $m),$arr[1],$arr[3]);
	$jd = $arr[3].'-'.array_search($arr[2],$m).'-'.$arr[1].' '.$arr[4];
	$time = strtotime($jd);
	print("$time\n");
}
?>