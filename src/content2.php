<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
header('Content-Type: text/html');

session_start();
if(!isset($_POST['username']) && !isset($_SESSION['username'])){
	header("Location: http://web.engr.oregonstate.edu/~smidtj/login.php");
	exit;
}
if((isset($_POST['username']) && $_POST['username'] == null) && !isset($_SESSION['username'])){
	echo '<p> A username must be entered. Click <a href="http://web.engr.oregonstate.edu/~smidtj/login.php">here</a> to return to the login screen';
} else {
	echo '<p>You\'ve made it to content2! Pretty neat!';
	echo '<p>Click <a href="http://web.engr.oregonstate.edu/~smidtj/content1.php">here</a> to go back to content1.';
}

?>