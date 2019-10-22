<?php
$file = "../ex01/private/passwd";
if ($_POST['submit'] == "OK")
{
if ($_POST['login'] == '' || $_POST['oldpw'] == ''|| $_POST['newpw'] == '')
{
echo "ERROR\n";
exit (1);
}
$pass = hash(md5, $_POST['newpw']);
$oldpw = hash(md5, $_POST['oldpw']);
$ff = file_get_contents($file);
$mas = unserialize($ff);
$i = 0;
for ($i=0; $i < count($mas); $i++) {
    if ($mas[$i]['login'] == $_POST['login'])
    {
        $fl = 1;
         if ($mas[$i]['passwd'] == $oldpw)
         $mas[$i]['passwd'] = $pass;
         else
        {
         echo "ERROR\n";
         exit (1);
         }
    }
}
if ($fl == 0)
{
echo "ERROR\n";
exit (1);
}
echo "OK\n";
$str = serialize($mas);
file_put_contents($file, $str);
}
else
{
echo "ERROR\n";
exit (1);
}
?>