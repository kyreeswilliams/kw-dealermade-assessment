/**
 *
 * app.js
 * primary JS file for the entire AngularJS application
 *
 */

var app = angular.module('dealermadeDemo', ['ngAnimate']);

/* Services */
app.service('LoadingInterceptor', ['$q', '$rootScope', '$log', function($q, $rootScope, $log){
	var xhr = 0;

	function updateStatus(){
		$rootScope.loading = xhr;
	}

	return{
		request: function(config){
			xhr++;
			updateStatus();
			return config;
		}, 
		requestError: function(rejection){
			xhr--;
			updateStatus();
			$log.error('Request error: ', rejection);
			return $q.reject(rejection);
		},
		response: function(response){
			xhr--;
			updateStatus();
			return response;
		},
		responseError: function(rejection){
			xhr--;
			updateStatus();
			log.error('Response error: ', rejection);
			return $q.reject(rejection)
		}
	}
}]);
app.service('ApiData', ['$http', function($http){
	this.textData = function(){
		var url = 'https://api.dealermade.com/v2/dealerships/hare-chevrolet/vehicles/1FTFW1ET8DKF64586';
		return $http.get(url);
	}
}])

app.directive('slickSlider',function($timeout){
	return {
		restrict: 'A',
		link: function(scope, element, attrs) {
			$timeout(function() {
				$(element).slick(scope.$eval(attrs.slickSlider));
			});
		}
	}
}); 

app.directive('imagePanning',function($timeout){
	return {
		restrict: 'A',
        link: function(scope, element) {
        	console.log("Image panning was run");
        	$(element).imagePanning();
        	//$(element).destroyImagePanning();
        }
	}
}); 

/* Configs */
app.config(['$httpProvider', function($httpProvider){
	$httpProvider.interceptors.push('LoadingInterceptor');
}]);

/* Variables */

app.value('globalVars', {
	stuff: 'stuff'
});