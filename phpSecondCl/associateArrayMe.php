<?php 
	echo ("<h2>");
	echo ("Associative Array");
	echo ("</h2>");
	// Create an Associative Array and initialize
	$courses = array("BIT110"=>"Fundamentals of Operating System", "BIT210"=>"Web Programming", "BIT106"=>"Programming in Java");
	// Accessing elements of associative array using key
	echo($courses["BIT106"]);
	// Add a new element to array
	$courses["DIP215"] = "Object Oriented Programming";
	echo ("<h3>");
	echo (" Traversing associative array and display key and value");
	echo ("</h3>");
	foreach ($courses as $key => $val) {
		echo("[".$key."] --->" .$val);
		echo ("<br>");
	}
	echo ("<h3>");
	echo (" Traversing associative array and display its values");
	echo ("</h3>");
	
	foreach ($courses as  $value) {
		echo($value);
		echo ("<br>");
	}
	$courses_original = $courses;
	sort($courses);
	
	echo ("<h3>");
	echo (" Applying sort function on array, Sorting is done based on value");
	echo ("<br>");
	echo (" Notice keys are no longer intact and are changed to numeric indices");
	echo ("</h3>");
	foreach ($courses as $key => $val) {
		echo("[".$key."] --->" .$val);
		echo ("<br>");
	}
	$courses = $courses_original;
	ksort($courses);
	echo ("<h3>");
	echo (" Applying ksort function on array");
	echo ("<br>");
	echo (" Sorting is based on key. Keys remain intact");
	echo ("</h3>");
	foreach ($courses as $key => $val) {
		echo("[".$key."] --->" .$val);
		echo ("<br>");
	}
?>