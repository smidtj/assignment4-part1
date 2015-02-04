<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>loopback</title>
</head>
<header>loopback</header>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$local = array();

$local['Type'] = $_SERVER['REQUEST_METHOD'];
if ($local["Type"] == "GET"){
	if($_GET == null){
		$local['parameters'] = null;
	}
	foreach($_GET as $key => $value){
		$local['parameters'][$key] = $value;
	}
}

if ($local["Type"] == "POST"){
	if($_POST == null){
		$local['parameters'] = null;
	}
	foreach($_POST as $key => $value){
		$local['parameters'][$key] = $value;
	}
}

$myJSON = json_encode($local);
echo $myJSON;
echo '</body>';
echo '</html>';
?>
