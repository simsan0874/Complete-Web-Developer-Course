<?php

	$i = 0;
	
	while ($i < 20) {
	
		echo $i;
		
		$i++;
		
	}
	
	echo "<br /><br />";
	
	$i = 0;
	$array=array("apple", "banana", "grape");
	
	while ($array[$i]) {
	
		echo "Key: $i - Value: $array[$i]<br />";
		
		$i++;
		
	}
	
?>