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
	.when('/requests', {
		templateUrl: 'templates/request.php',
		controller: 'requestCtrl'
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

		var datastring = new FormData();
		datastring.append('sresume', $('input[type=file]')[0].files[0]);
		datastring.append('semail', semail);
		datastring.append('spassword', spassword);
		datastring.append('sfname', sfname);
		datastring.append('slname', slname);
		datastring.append('suniversity', suniversity);
		datastring.append('sdegree', sdegree);
		datastring.append('smajor', smajor);
		datastring.append('sgpa', sgpa);
		datastring.append('sintro', sintro);
		
		if(semail == "" || spassword == "" || sfname == "" || slname == "" || suniversity == "" || sdegree == "" || smajor == "" || sgpa == ""){
			$("#infomsg").html("Please fill out all details");
		}else if(spassword.length >30 || spassword.length < 6){
			$("#infomsg").html("Password length should be between 6-30 characters");
		}else{
			$.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/studentregister.php',
				data: datastring,
				cache: false,
				processData: false,
				contentType: false,
				success: function(result){
					if(result == "Failed"){
						$("#infomsg").html("Email exists in database. Please log in or use other email address.");
					}else{
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
	$("#infomsg").html("Search for your friend");
	$("#submit").click(function(){
		var name = $("#name").val();
		var datastring = $("#networkform").serialize();
		$.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/studentnetwork.php',
			data: datastring,
			cache: false,
			success: function(result){
				$("#infomsg").html(result.info.length + " people matching your result");
				$("#fn").html("First Name");
				$("#ln").html("Last Name");
				$("#em").html("Email");
				$("#uv").html("University");
				$("#dg").html("Degree");
				$("#mg").html("Major");
				$scope.networks = result;
				$scope.$apply(); },
		  	error: function(XMLHttpRequest, textStatus, errorThrown){
		  		$("#infomsg").html("0 people matching your result");
				$("#fn").html("");
				$("#ln").html("");
				$("#em").html("");
				$("#uv").html("");
				$("#dg").html("");
				$("#mg").html("");
		  		$scope.networks = "";
		  		$scope.$apply();
			}
		});
	});
	 $scope.addfriend = function(i) {
		 var semail = $scope.networks.info[i].semail;
		 $.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/studentaddfriend.php',
				data: {semail, semail},
				cache: false,
				success: function(result){
					window.alert("Success! Invitation has sent to " + semail);
				}
		});
	};
	return false;
});

myApp.controller("requestCtrl", function($scope, $http){
	 $.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/studentrequests.php',
			cache: false,
			success: function(result){
				$("#fn").html("First Name");
				$("#ln").html("Last Name");
				$("#em").html("Email");
				$("#uv").html("University");
				$("#dg").html("Degree");
				$("#mg").html("Major");
				if(result.info.length<=0){
					$scope.requestlength = 0;
				}else{
					$scope.requestlength = result.info.length;
				}
				$scope.requests = result;
				$scope.$apply();
			}
	});

	
	/*$http.get("http://localhost/jobster/webservices/studentrequests.php")
	.then(function(response){
		$("#infomsg").html(response);
		$("#fn").html("First Name");
		$("#ln").html("Last Name");
		$("#em").html("Email");
		$("#uv").html("University");
		$("#dg").html("Degree");
		$("#mg").html("Major");
		$scope.requests = response;
	})*/
});
