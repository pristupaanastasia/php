<?php
if (!$_SERVER['PHP_AUTH_USER']) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
} 
if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys')
{
	$file = '../img/42.png';
	$type = 'image/png';
	?><html><body>Hello Zaz<br /><?php
}
else
{
	header('HTTP/1.0 401 Unauthorized');
	?><html><body>That area is accessible for members only</body></html><?php
	echo "\n";
	
}
?>
<?php
if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys')
{
	$file = '../img/42.png';
    $type = 'image/png';
	$img = file_get_contents($file);
	echo '<img src='.'data:'.$type .';base64,'. base64_encode($img).'>';
	?></body></html><?php
}
?>