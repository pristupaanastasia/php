<?php
foreach ($_GET as $key=>$value)
{
	if ($key == 'action')
		$opt = $value;
	if ($key == 'name')
		$name = $value;
	if ($key == 'value')
		$val = $value;
	else
		$val = 'error';
}
if ($opt == 'set')
{
	setcookie($name, $val, time() + 3600, "/", "", 0);
}
if ($opt == 'del')
{
	setcookie( $name, "", time()- 60, "/","", 0);
}
if ($opt == 'get')
{
	echo $_COOKIE[$name]."\n";
}
?>