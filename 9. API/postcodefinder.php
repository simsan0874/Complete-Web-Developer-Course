<!doctype html>
<html>

	<head>
		<title>Post Code Finder</title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<style>
			html, body {
				height:100%;
			}
			.container {
				background-image:url("background.jpg");
				width:100%;
				height:100%;
				background-size:cover;
				background-position:center;
				padding-top:100px;
			}
			.center {
				text-align:center;
			}
			p {
				padding-top:15px;
				padding-bottom:15px;
			}
			button {
				margin-top:20px;
				margin-bottom:20px;
			}
			.alert {
				margin-top:20px;
				display:none;
			}
			.whiteBackground {
				background-color:white;
				padding:20px;
				border-radius:20px;
		</style>
	</head>

	<body>
	
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 center whiteBackground">
					<h1 class="center">Postal Code Finder</h1>
					<p class="lead center">Enter any address to find the postal code.</p>
					<form>
						<div class="form-group">
							<input type="text" class="form-control" name="address" id="address" placeholder="Eg. 63 Fake Street, Faketown" />
						</div>
						<button id="findMyPostalCode" class="btn btn-success btn-lg">Find My Postal Code</button>
					</form>
					<div id="success" class="alert alert-success">Success!</div>
					<div id="fail" class="alert alert-danger">Could not find the postal code for that address. Please try again.</div>
					<div id="ajaxConnect" class="alert alert-danger">Could not connect to the server. Please try again.</div>
					<div id="noAddress" class="alert alert-danger">Please enter an address!</div>
				</div>
			</div>
		</div>
		
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		
		<script>
		
			$("#findMyPostalCode").click(function(event) {
				
				event.preventDefault();
				
				$(".alert").hide();
				
				if ($("#address").val() != "") {
				
					$.ajax({
						type: "GET",
						url: "https://maps.googleapis.com/maps/api/geocode/xml?address="+encodeURIComponent($('#address').val())+"&key=AIzaSyBM0xJcp0q9vK_FTy3CiSYBGX2dcDECoRA",
						dataType: "xml",
						success: processXML,
						error: ajaxError
					});
					
				} else {
					$("#noAddress").fadeIn();
				}
					
				function processXML(xml) {
				
					if ($(xml).find("status").text() == "OK") {
					
						$(xml).find("address_component").each(function() {
					
							if ($(this).find("type").text() == "postal_code") {
								$("#success").html("The postal code is " + $(this).find('long_name').text()).fadeIn();
							}
						
						});
						
					} else {
						$("#fail").fadeIn();
					}
					
				}
				
				function ajaxError(xml) {
					$("#ajaxConnect").fadeIn();
				}
				
			});
			
		</script>
	
	</body>
	
</html>