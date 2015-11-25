<!doctype html>
<html>
	<head>
		<title>PHP Email</title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<div>
			<?php
					
				$emailTo="andrewmsims0874@hotmail.com";
				$subject="I hope this works!";
				$body="I think you're great";
				$headers="From: andrewmsims@hotmail.com";

				if (mail($emailTo, $subject, $body, $headers)) {

					echo "Mail sent successfully!";

				} else {

					echo "Mail not sent!";
						
				}
					
					
			?>
		</div>
	</body>
</html>