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
	<body ng-app="dealermadeDemo" ng-cloak>
		<div id="loader" ng-show="loading">
		    <div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
		</div>
		<header ng-controller="infoController">
			<div class="container">
				<h1>
					<strong>
						{{ vehicleData.year ? vehicleData.year + ' ' : '' }}
						{{ vehicleData.make ? vehicleData.make + ' ' : '' }}
						{{ vehicleData.model ? vehicleData.model + ' ' : '' }}
						{{ vehicleData.trim ? vehicleData.trim + ' ' : '' }}
					</strong>
					<span class="extraneous">Photo Gallery</span>
				</h1>
			</div>
		</header>
		<div id="gallery" ng-controller="galleryController">
			<div id="gallery-mainpicture-outer">
				<div class="label-wrapper">
					<div class="label">Drag mouse or finger here to pan image</div>
				</div>
				<div id="gallery-mainpicture">
					<!-- <img id="gallery-mainpicture-image" ng-src="{{ mainpicture }}" image-panning/> -->
					<img id="gallery-mainpicture-image" ng-src="http://dealermade-io.s3.amazonaws.com/vehicle_pictures/2393845/c9c19abc-f80b-4cac-ba27-9c67773827c2.jpg" image-panning/>
				</div>
			</div>
			<div class="container">
				<div class="label">Scroll left / right to see images</div>
				<div
				id="gallery-carousel"
				data-ng-if="pictures" 
				slick-slider="{
					dots: false, 
					arrows: true, 
					draggable: true,
					slidesToShow:5,
					infinite:false,
					adaptiveHeight:true,
					prevArrow:&quot;<div class='button-outer prev'><button type='button' class='slick-prev'><i class='fa fa-arrow-circle-left fa-lg'></i></button></div>&quot;, 
					nextArrow:&quot;<div class='button-outer next'><button type='button' class='slick-next'><i class='fa fa-arrow-circle-right fa-lg'></i></button></div>&quot;,  
					responsive: [
					    {
							breakpoint: 991,
							settings: {
								slidesToShow: 3
							}
					    },
					    {
					    	breakpoint: 500,
					    	settings: {
					    		slidesToShow: 2,
					    		arrows: false
					    	}
					    }
				    ]
				}">
	  				<div id="previous-placeholder" class="placeholder"></div>
					<div ng-repeat="(key, picture) in pictures">
						<img ng-src="{{ picture.directory + '/main_' + picture.filename  }}" ng-click="loadMainImage(key)">
					</div>
					<div id="next-placeholder" class="placeholder"></div>
				</div>
			</div>
		</div>
		<script>
			(function($){
				$("img#gallery-mainpicture-image").imagePanning();
			})(jQuery);
		</script>
	</body>
</html>