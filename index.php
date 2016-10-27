<html>
	<head>
		<!-- Boilerplate CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/slick.css"> 
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/spinner.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<!-- Libraries -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-animate.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- Plugins -->
		<script src="js/plugins/jquery.imagePanning.js"></script>
		<script src="js/plugins/slick.min.js"></script>
		<!-- Custom Scripts -->
		<script src="js/app.js"></script>
		<script src="js/controllers/infoController.js"></script>
		<script src="js/controllers/galleryController.js"></script>
		<!-- Tags -->
		<title>KW Dealermade Photo Gallery</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body ng-app="dealermadeDemo">
		<div id="loader" ng-show="loading">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
		<div ng-include="'templates/info.html'"></div>
		<div ng-include="'templates/gallery.html'"></div>
	</body>
</html>