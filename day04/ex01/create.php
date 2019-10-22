<?php
error_reporting(0);
$file = "private/passwd";
if ($_POST['submit'] == "OK")
{
if ($_POST['login'] == '' || $_POST['passwd'] == '')
{
echo "ERROR\n";
exit (1);
}
$pass = hash(md5, $_POST['passwd']);
if (!file_exists("private"))
{
mkdir("private", 0777);
if (!file_exists($file))
file_put_contents($file, "");
}
$ff = file_get_contents($file);
$mas = unserialize($ff);
$i = 0;
foreach ($mas as $key) 
{
	if ($key['login'] == $_POST['login'])
	{
	echo "ERROR\n";
	exit (1);
	}
	$i++;
}
$mas[$i]['login'] = $_POST['login'];
$mas[$i]['passwd'] = $pass;
$str = serialize($mas);
file_put_contents($file, $str);
echo "OK\n";
}
else
{
echo "ERROR\n";
exit (1);

}
?>