<?php

	$myArray=array("pizza", "chocolate", "coffee");
	
	print_r($myArray);
	
	echo $myArray[5];
	
	echo "<br /><br />";
	
	$anotherArray[0]="pizza";
	$anotherArray[1]="yogurt";
	
	print_r($anotherArray);
	
	echo "<br /><br />";
	
	$thirdArray=array(
		"France" => "French",
		"USA" => "English",
		"Germany" => "German"
	);
	
	print_r($thirdArray);
	
	echo "<br /><br />";
	
	$anotherArray[]="salad";
	
	print_r($anotherArray);
	
	echo "<br /><br />";
	
	unset($thirdArray["Germany"]);
	
	print_r($thirdArray);
	
	echo "<br /><br />";
	
	$name="Andrew";
	
	unset($name);
	
	echo $name;
	
?>