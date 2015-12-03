<!DOCTYPE html>
<html>
	<head>
	
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		
		<style type="text/css">
			html { height: 100% }
			body { height: 100%; margin: 0; padding: 0 }
			#mapcanvas { height: 100% }
		</style>
		
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBM0xJcp0q9vK_FTy3CiSYBGX2dcDECoRA">
		</script>
		
		<script type="text/javascript">
		
			function initialize() {
			
				var mapOptions = {
					center: new google.maps.LatLng(40.066, -75.720),
					zoom: 8
				};
				
				var map = new google.maps.Map(document.getElementById("mapcanvas"), mapOptions);
				
			}
			
			google.maps.event.addDomListener(window, 'load', initialize);
			
		</script>
		
	</head>
	
	<body>
		<div id="mapcanvas"/>
	</body>
	
</html>