<?php

	$link = mysqli_connect("localhost", "cl24-example-itt", "9!Dh.fUeX", "cl24-example-itt");

	if (mysqli_connect_error()) {
		die("Could not connect to database");
	}
	
	$query = "SELECT * FROM users";
	 	
	if ($result=mysqli_query($link, $query)) {

		while ($row = mysqli_fetch_array($result)) {
			print_r($row);
			echo md5(md5($row["id"]).$row["password"])."<br /><br />";
		}
		
	} else {
		echo "It failed";
	}

 ?>