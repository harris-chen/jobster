var myApp = angular.module("jobster", ["ngRoute"]);
myApp.config(function ($routeProvider,$locationProvider) {
	$locationProvider.hashPrefix('');
	$routeProvider
	.when('/', {
		templateUrl: 'templates/default.html',
		controller: 'defaultCtrl'
	})
});

myApp.controller("defaultCtrl", function($scope, $http){
	/*$http.get("http://localhost/angularjscrud/webservices/allPosts.php")
	.then(function(response){
		$scope.posts = response.data;
	})*/
});