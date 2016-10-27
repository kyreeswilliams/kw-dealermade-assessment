/**
 *
 * galleryController.js
 * controller for the image gallery
 *
 */

app.controller('galleryController', ['$scope', '$rootScope', 'ApiData', function($scope, $rootScope, ApiData){
	/* Functions */
	$rootScope.loading = true;

	$scope.loadMainImage = function(id){
		$scope.mainpicture = $scope.pictures[id].url;
	}
	
	/* Retrieve API info wrapper */
	ApiData.textData()
	.then(function(d){
		$scope.vehicleData = d.data;

		/* Grab all pictures of type "picture" */
		$scope.pictures = [];
		angular.forEach($scope.vehicleData.vehicle_pictures, function(obj, key){
			if(obj.vehicle_picture_type == "picture"){
				obj.directory = obj.url.substr(0, obj.url.lastIndexOf('/'));
				$scope.pictures.push(obj);
			}
		});

		/* Assign first picture to main gallery image */
		$scope.mainpicture = $scope.pictures[0].url;
		$rootScope.loading = false;
	});
}]);