<?php

	mysqli_connect("localhost", "cl24-example-itt", "9!Dh.fUeX", "cl24-example-itt");

	if (mysqli_connect_error()) {
		echo "Could not connect to database";
	} else {
		echo "Connection established";
	}

 ?>