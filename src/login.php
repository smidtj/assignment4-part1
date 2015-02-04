<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
header('Content-Type: text/html');

session_start();
if(isset($_GET['logout'])){
	$_SESSION = array();
	session_destroy();
}
echo '<form method="post" action="http://web.engr.oregonstate.edu/~smidtj/content1.php">Username<br><input type="text" name="username"><input type="submit" value="Login">';

echo '</body>';
echo '</html>';
?>