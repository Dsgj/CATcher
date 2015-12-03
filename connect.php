

<?php
#phpinfo();
ini_set('display_errors', 1);
// we connect to example.com and port 3306
$link = mysql_connect('cloud-52.skelabb.ltu.se:3306', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

// we connect to localhost at port 3306
$link = mysql_connect('127.0.0.1:3306', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

?>
