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
				url: "https://maps.googleapis.com/maps/api/geocode/xml?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyBM0xJcp0q9vK_FTy3CiSYBGX2dcDECoRA",
				dataType: "xml",
				success: processXML
			});
			
			function processXML(xml) {
			
				$(xml).find("address_component").each(function() {
				
					if ($(this).find("type").text() == "postal_code") {
					
						alert($(this).find("long_name").text());
						
					}
					
				});
				
				$(xml).find("location").each(function() {
				
					alert("Latitude: ".concat($(this).find("lat").text()));
					alert("Longitude: ".concat($(this).find("lng").text()));
					
				});
				
			}
		
		</script>
		
	</body>
	
</html>