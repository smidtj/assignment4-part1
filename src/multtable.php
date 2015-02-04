<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>multtable</title>
</head>
<header>multtable</header>
<body>
<?php

$minMultiplicand = $_GET['min-multiplicand'];
$maxMultiplicand = $_GET['max-multiplicand'];
$minMultiplier = $_GET['min-multiplier'];
$maxMultiplier = $_GET['max-multiplier'];

if ((int) $minMultiplicand > (int) $maxMultiplicand){
	echo "<p> Minimum multiplicand larger than maximum </p>";
}

if ((int) $minMultiplier > (int) $maxMultiplier){
	echo "<p> Minimum multiplier larger than maximum </p>";
}

if ($minMultiplicand === NULL){
	echo "<p> Missing parameter min-multiplicand. </p>";
}

if ($maxMultiplicand === NULL){
	echo "<p> Missing parameter max-multiplicand. </p>";
}

if ($minMultiplier === NULL){
	echo "<p> Missing parameter min-multiplier. </p>";
}

if ($maxMultiplier === NULL){
	echo "<p> Missing parameter max-multiplier. </p>";
}

if ((int) $minMultiplicand == 0){
	echo "<p> min-multiplicand must be an integer. </p>";
}

if ((int) $maxMultiplicand == 0){
	echo "<p> max-multiplicand must be an integer. </p>";
}

if ((int) $minMultiplier == 0){
	echo "<p> min-multiplier must be an integer. </p>";
}

if ((int) $maxMultiplier == 0){
	echo "<p> max-multiplier must be an integer. </p>";
}
echo '<p>Multiplication Table</p>
<table border="1"><td>';

for($j = 0; $j < ($maxMultiplier - $minMultiplier + 1); $j++){
	echo '<td>' . ($minMultiplier + $j);	
}

for($i = 0; $i < ($maxMultiplicand - $minMultiplicand + 1); $i++){
	echo '<tr><td>' . ($minMultiplicand + $i);
	for($j = 0; $j < ($maxMultiplier - $minMultiplier + 1); $j++){
		echo '<td>' . (($minMultiplicand + $i) * ($minMultiplier + $j));
	}
		
}

echo '</table>';
echo '</body>';
echo '</html>';
?>
