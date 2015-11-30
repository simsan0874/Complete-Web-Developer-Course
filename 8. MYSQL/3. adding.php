<?php

	$link = mysqli_connect("localhost", "cl24-example-itt", "9!Dh.fUeX", "cl24-example-itt");

	if (mysqli_connect_error()) {
		die("Could not connect to database");
	}
	
	$query = "DELETE FROM `users` WHERE `email` = 'beth@gmail.com'";
	
	if (! mysqli_query($link, $query)) {
		die("Could not delete from the database");
	} else {
		echo "Delete successful!<br />";
	}
	
	$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Beth', 'beth@gmail.com', 'apples')";
	
	if (! mysqli_query($link, $query)) {
		die("Could not insert to the database");
	} else {
		echo "Insert successful!<br />";
	}
	
	$query="UPDATE `users` SET `name`='Bethany' WHERE `id`=5 LIMIT 1";
	
	if (! mysqli_query($link, $query)) {
		die("Could not update the database");
	} else {
		echo "Update successful!<br />";
	}

	$query = "SELECT * FROM users WHERE `email` = 'beth@gmail.com'";
	 	
	if ($result=mysqli_query($link, $query)) {

		$row = mysqli_fetch_array($result);

		print_r($row);
		
	} else {
		echo "Retrieve failed!";
	}
	
 ?>