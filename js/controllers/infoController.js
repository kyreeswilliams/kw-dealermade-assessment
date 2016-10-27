/**
 *
 * infoController.js
 * controller for all important data about vehicle
 *
 */

app.controller('infoController', ['$scope', 'ApiData', function($scope, ApiData){
	/* Retrieve API info wrapper */
	ApiData.textData()
	.then(function(d){
		$scope.vehicleData = d.data;
	});
}]);