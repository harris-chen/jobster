var myApp = angular.module("jobster", ["ngRoute"]);
myApp.config(function ($routeProvider,$locationProvider) {
	$locationProvider.hashPrefix('');
	$routeProvider
	.when('/', {
		templateUrl: 'templates/default.php',
		controller: 'defaultCtrl'
	})
	.when('/register', {
		templateUrl: 'templates/register.php',
		controller: 'registerCtrl'
	})
	.when('/login', {
		templateUrl: 'templates/login.php',
		controller: 'loginCtrl'
	})
	.when('/logout', {
		templateUrl: 'templates/logout.php',
		controller: 'logoutCtrl'
	})
	.when('/network', {
		templateUrl: 'templates/network.php',
		controller: 'networkCtrl'
	})
	.when('/allnetwork', {
		templateUrl: 'templates/allnetwork.php',
		controller: 'allnetworkCtrl'
	})
});

myApp.controller("defaultCtrl", function($scope){
});

myApp.controller("registerCtrl", function($scope, $http, $window){
	$("#submit").click(function(){
		var semail = $("#semail").val();
		var spassword= $("#spassword").val();
		var sfname = $("#sfname").val();
		var slname = $("#slname").val();
		var suniversity = $("#suniversity").val();
		var sdegree = $("#sdegree").val();
		var smajor = $("#smajor").val();
		var sgpa = $("#sgpa").val();
		var sintro = $("#sintro").val();
		var sresumetext = $("#sresumetext").val();
		var datastring = $("#registerform").serialize();
		if(semail == "" || spassword == "" || sfname == "" || slname == "" || suniversity == "" || sdegree == "" || smajor == "" || sgpa == "" || sresumetext == ""){
			$("#infomsg").html("Please fill out all details");
		}else if(spassword.length >30 || spassword.length < 6){
			$("#infomsg").html("Password length should be between 6-30 characters");
		}else{
			$.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/studentregister.php',
				data: datastring,
				cache: false,
				success: function(result){
					if(result == "Failed"){
						$("#infomsg").html("Email exists in database. Please log in or use other email address.");
					}else{
						var semail = $("#semail").val("");
						var spassword= $("#spassword").val("");
						var sfname = $("#sfname").val("");
						var slname = $("#slname").val("");
						var suniversity = $("#suniversity").val("");
						var sdegree = $("#sdegree").val("");
						var smajor = $("#smajor").val("");
						var sgpa = $("#sgpa").val("");
						var sintro = $("#sintro").val("");
						var sresumetext = $("#sresumetext").val("");
						window.location.href="http://localhost/jobster";
					}
				}
			});
		}
		return false;
	});
});
myApp.controller("loginCtrl", function($scope, $http){
	$("#submit").click(function(){
		var semail = $("#semail").val();
		var spassword= $("#spassword").val();
		var datastring = $("#loginform").serialize();
		
		if(semail == "" || spassword == "" ){
			$("#infomsg").html("Please fill out all details");
		}else if(spassword.length >30 || spassword.length < 6){
			$("#infomsg").html("Password length should be between 6-30 characters");
		}else{
			$.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/studentlogin.php',
				data: datastring,
				cache: false,
				success: function(result){
					if(result == "Not exist"){
						$("#infomsg").html("Email doesn't exist in database.");
					}else if(result == "Incorrect Password"){
						$("#infomsg").html("Incorrect Password. Please try again.");
					}else{
						window.location.href="http://localhost/jobster";
					}
				}
			});
		}
		return false;
	});
});
myApp.controller("logoutCtrl", function($scope, $http){
	$http.get("http://localhost/jobster/webservices/studentlogout.php")
	.then(function(response){
		window.location.href="http://localhost/jobster";
	})
});
myApp.controller("networkCtrl", function($scope, $http){
	$("#submit").click(function(){
		var name = $("#name").val();
		var datastring = $("#networkform").serialize();
		$.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/studentnetwork.php',
			data: datastring,
			cache: false,
			success: function(result){
				window.location.href="#/allnetwork";				
			}
		});
	return false;
	});
});
myApp.controller("allnetworkCtrl", function($scope, $http){
	$http.get("http://localhost/jobster/webservices/studentnetwork.php")
	.then(function(response){
		$scope.networks = response.data;
	})
});
