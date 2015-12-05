<!DOCTYPE html>
<html>
	<head>
	
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		
	</head>
	
	<body>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		
		<script>
		
			$.ajax({
				type: "GET",
				url: "https://www.billianshealthdata.com/api.php?api_id=62bf16598972cd8e2239612975455143&api_key=dca8f6fffb38081a63099572711076fa&return=xml",
				crossDomain: true,
				dataType: "xml",
				success: processXML
			});
			
			function processXML(xml) {
			
				print_r(xml);
				
			}
		
		</script>
		
	</body>
	
</html>