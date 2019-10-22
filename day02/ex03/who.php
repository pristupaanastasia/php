#!/usr/bin/php
<?php
// date
date_default_timezone_set("Europe/Paris");
$file = fopen("/var/run/utmpx","r");
$user = array();
while($line = fread($file,628))
{
	$data = unpack("a256name/a4id/a32tty_name/ipid/ientry/I2tv/a256hostname/i16utpad", $line);
	if($data['entry'] == 7)
		$user[] = $data;
}
foreach ($user as $kek)
{
	$time = date("M j H:i",$kek['tv1']);
	printf("%s  %s   %s \n",$kek['name'], $kek['tty_name'], $time);
}
?>