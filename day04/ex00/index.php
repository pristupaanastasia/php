<?php
session_start();
foreach($_GET as $key=>$value)
{
	if ($key == 'login')
		$login = $value;
	if ($key == 'submit')
		$submit = $value;
	if ($key == 'passwd')
		$passwd = $value;
}
if ($_GET['submit'] == 'OK')
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html><body>
<?php
echo "<form name='insertion' action='index.php' method='GET'>";
if ($_GET['login']!=NULL)
{
	echo " Username: <input type='text' name='login' value='".$_GET['login']."'/>";
}
else
{
	echo " Username: <input type='text' name='login' value='".$_SESSION['login']."'/>";
}
?>
<br />
<?php
if ($_GET['passwd']!=NULL)
{
	echo " Password: <input type='text' name='passwd'  value= '".$_GET['passwd']."' />";
}
else
{
	echo " Password: <input type='text' name='passwd'  value= '".$_SESSION['passwd']."' />";
}
?>
<input type='submit' value='OK' />
</form>
</body></html>