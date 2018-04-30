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
	.when('/friends', {
		templateUrl: 'templates/friend.php',
		controller: 'friendCtrl'
	})
	.when('/profile', {
		templateUrl: 'templates/profile.php',
		controller: 'profileCtrl'
	})
	.when('/employer', {
		templateUrl: 'templates/companydefault.php',
		controller: 'companydefaultCtrl'
	})
	.when('/companyregister', {
		templateUrl: 'templates/companyregister.php',
		controller: 'companyregisterCtrl'
	})
	.when('/companylogin', {
		templateUrl: 'templates/companylogin.php',
		controller: 'companyloginCtrl'
	})
	.when('/companylogout', {
		templateUrl: 'templates/logout.php',
		controller: 'companylogoutCtrl'
	})
	.when('/companyprofile', {
		templateUrl: 'templates/companyprofile.php',
		controller: 'companyprofileCtrl'
	})
	.when('/companypostjob', {
		templateUrl: 'templates/companypostjob.php',
		controller: 'companypostjobCtrl'
	})
	.when('/companyjobs', {
		templateUrl: 'templates/companyjobs.php',
		controller: 'companyjobsCtrl'
	})
	.when('/jobs/:jid', {
		templateUrl: 'templates/companyviewjob.php',
		controller: 'companyviewjobCtrl'
	})
	.when('/searchjobs', {
		templateUrl: 'templates/jobs.php',
		controller: 'jobsCtrl'
	})
	.when('/companylist', {
		templateUrl: 'templates/companylist.php',
		controller: 'companylistCtrl'
	})
	.when('/companies/:cid', {
		templateUrl: 'templates/companyview.php',
		controller: 'companyviewCtrl'
	})
	.when('/following', {
		templateUrl: 'templates/following.php',
		controller: 'followingCtrl'
	})
	.when('/applications', {
		templateUrl: 'templates/applications.php',
		controller: 'applicationCtrl'
	})
});

myApp.controller("defaultCtrl", function($scope){
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();
});

myApp.controller("registerCtrl", function($scope, $http, $window){
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();
	$("#submit").unbind("click").click(function(){
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
		datastring.append('simage', $('input[type=file]')[1].files[0]);
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
					$("#infomsg").html(result);
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
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();
	$("#submit").unbind("click").click(function(){
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
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();
	$("#infomsg").html("Search for your friend");
	$("#submit").unbind("click").click(function(){
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
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();
	 $.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/studentrequests.php',
			cache: false,
			success: function(result){
				$("#fnrequest").html("First Name");
				$("#lnrequest").html("Last Name");
				$("#emrequest").html("Email");
				$("#uvrequest").html("University");
				$("#dgrequest").html("Degree");
				$("#mgrequest").html("Major");
				$scope.requestlength = result.info.length;
				$scope.requests = result;
				$scope.$apply();
			},
	 		error: function(XMLHttpRequest, textStatus, errorThrown){
	 			$scope.requestlength = 0
	 			$scope.requests = "";
				$scope.$apply();
	 		}
	});
	$scope.accept = function(i) {
		 var semail = $scope.requests.info[i].semail;
		 $.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/studentacceptfriend.php',
				data: {semail, semail},
				cache: false,
				success: function(result){
					$scope.requestlength = result.info.length;
					$scope.requests = result;
					$scope.$apply();
				},
				error: function(XMLHttpRequest, textStatus, errorThrown){
		 			$scope.requestlength = 0
		 			$scope.requests = "";
					$scope.$apply();
		 		}
		});
	};
	$scope.decline = function(i) {
		 var semail = $scope.requests.info[i].semail;
		 $.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/studentdeclinefriend.php',
				data: {semail, semail},
				cache: false,
				success: function(result){
					$scope.requestlength = result.info.length;
					$scope.requests = result;
					$scope.$apply();
				},
				error: function(XMLHttpRequest, textStatus, errorThrown){
		 			$scope.requestlength = 0
		 			$scope.requests = "";
					$scope.$apply();
		 		}
		});
	};
	return false;	 
});

myApp.controller("friendCtrl", function($scope, $http){
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();
	 $.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/studentshowfriend.php',
			cache: false,
			success: function(result){
				$("#fnfriend").html("First Name");
				$("#lnfriend").html("Last Name");
				$("#emfriend").html("Email");
				$("#uvfriend").html("University");
				$("#dgfriend").html("Degree");
				$("#mgfriend").html("Major");
				$scope.friendlength = result.info.length;
				$scope.friends = result;
				$scope.$apply();
			},
	 		error: function(XMLHttpRequest, textStatus, errorThrown){
	 			$scope.friendlength = 0
	 			$scope.friends = "";
				$scope.$apply();
	 		}
	});
	return false;	 
});

myApp.controller("profileCtrl", function($scope){
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();
	$("#edit").hide();
	$("#noeditedit").show();
	 $.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/studentprofile.php',
			cache: false,
			success: function(result){
				$scope.profile = result;
				$scope.$apply();
			}
	});
	 $scope.editprofile = function(i) {
		 $("#noedit").hide();
		 $("#edit").show();
		 $("#submit").click(function(){
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
			datastring.append('simage', $('input[type=file]')[1].files[0]);
			datastring.append('spassword', spassword);
			datastring.append('sfname', sfname);
			datastring.append('slname', slname);
			datastring.append('suniversity', suniversity);
			datastring.append('sdegree', sdegree);
			datastring.append('smajor', smajor);
			datastring.append('sgpa', sgpa);
			datastring.append('sintro', sintro);
			
			if(spassword == "" || sfname == "" || slname == "" || suniversity == "" || sdegree == "" || smajor == "" || sgpa == ""){
				$("#infomsg").html("Please fill out all details");
			}else if(spassword.length >30 || spassword.length < 6){
				$("#infomsg").html("Password length should be between 6-30 characters");
			}else{
				$.ajax({
					type: 'POST',
					url: 'http://localhost/jobster/webservices/studentmodifyprofile.php',
					data: datastring,
					cache: false,
					processData: false,
					contentType: false,
					success: function(result){
						$("#infomsg").html("");
						$("#edit").hide();
						$("#noedit").show();
						window.location.href="http://localhost/jobster";
					}
				});
			}
		 });
	 };
	return false;	
});

myApp.controller("companydefaultCtrl", function($scope){
	$("#slogin").hide();
	$("#sregister").hide();
	$("#clogin").show();
	$("#cregister").show();
});

myApp.controller("companyregisterCtrl", function($scope){
	$("#slogin").hide();
	$("#sregister").hide();
	$("#clogin").show();
	$("#cregister").show();
	
	$("#companyregistersubmit").unbind("click").click(function(){
		var cemail = $("#cemail").val();
		var cpassword= $("#cpassword").val();
		var cname = $("#cname").val();
		var chqcity = $("#chqcity").val();
		var chqstate = $("#chqstate").val();
		var cindustry = $("#cindustry").val();
		var cintro = $("#cintro").val();

		var datastring = new FormData();
		datastring.append('cimage', $('input[type=file]')[0].files[0]);
		datastring.append('cemail', cemail);
		datastring.append('cpassword', cpassword);
		datastring.append('cname', cname);
		datastring.append('chqcity', chqcity);
		datastring.append('chqstate', chqstate);
		datastring.append('cindustry', cindustry);
		datastring.append('cintro', cintro);
		
		if(cemail == "" || cpassword == "" || cname == "" || chqcity == "" || chqstate == "" || cindustry == ""){
			$("#infomsg").html("Please fill out all details");
		}else{
			$.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/companyregister.php',
				data: datastring,
				cache: false,
				processData: false,
				contentType: false,
				success: function(result){
					$("#infomsg").html(result);
					if(result == "Failed"){
						$("#infomsg").html("Company exists in database. Please log in or use other email address.");
					}else{
						window.location.href="http://localhost/jobster/";
					}
				}
			});
		}
		return false;
	});
});
myApp.controller("companyloginCtrl", function($scope, $http){
	$("#slogin").hide();
	$("#sregister").hide();
	$("#clogin").show();
	$("#cregister").show();
	$("#companylogin").unbind("click").click(function(){
		var cemail = $("#cemail").val();
		var cpassword= $("#cpassword").val();
		var datastring = $("#companyloginform").serialize();
		
		if(cemail == "" || cpassword == "" ){
			$("#infomsg").html("Please fill out all details");
		}else{
			$.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/companylogin.php',
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
myApp.controller("companylogoutCtrl", function($scope, $http){
	$("#slogin").hide();
	$("#sregister").hide();
	$("#clogin").show();
	$("#cregister").show();
	$http.get("http://localhost/jobster/webservices/companylogout.php")
	.then(function(response){
		window.location.href="http://localhost/jobster/";
	})
});
myApp.controller("companyprofileCtrl", function($scope){
	$("#slogin").hide();
	$("#sregister").hide();
	$("#clogin").show();
	$("#cregister").show();
	$("#companyedit").hide();
	$("#companynoedit").show();	
	
	 $.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/companyprofile.php',
			cache: false,
			success: function(result){
				$scope.companyprofile = result;
				$scope.$apply();
			}
	});
	 
	 $scope.companyeditprofile = function(i) {
		 $("#companynoedit").hide();
		 $("#companyedit").show();
		 $("#companyeditsubmit").click(function(){
			var cpassword= $("#cpassword").val();
			var cname = $("#cname").val();
			var chqcity = $("#chqcity").val();
			var chqstate = $("#chqstate").val();
			var cindustry = $("#cindustry").val();
			var cintro = $("#cintro").val();

			var datastring = new FormData();
			datastring.append('cimage', $('input[type=file]')[0].files[0]);
			datastring.append('cpassword', cpassword);
			datastring.append('cname', cname);
			datastring.append('chqcity', chqcity);
			datastring.append('chqstate', chqstate);
			datastring.append('cindustry', cindustry);
			datastring.append('cintro', cintro);
			
			if(cpassword == "" || cname == "" || chqcity == "" || chqstate == "" || cindustry == ""){
				$("#infomsg").html("Please fill out all details");
			}else{
				$.ajax({
					type: 'POST',
					url: 'http://localhost/jobster/webservices/companymodifyprofile.php',
					data: datastring,
					cache: false,
					processData: false,
					contentType: false,
					success: function(result){
						$("#infomsg").html("");
						$("#companyedit").hide();
						$("#companynoedit").show();
						window.location.href="http://localhost/jobster";
					}
				});
			}
		 });
	 };
	 return false;
});

myApp.controller("companypostjobCtrl", function($scope){
	$("#slogin").hide();
	$("#sregister").hide();
	$("#clogin").show();
	$("#cregister").show();
	$("#companypostjobsubmit").unbind("click").click(function(){
		var datastring = $("#companypostform").serialize();
		var jtitle = $("#jtitle").val();
		
		if(jtitle == ""){
			$("#postinfomsg").html("Please fill out job title");
		}else{
			$.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/companypostjob.php',
				data: datastring,
				cache: false,
				success: function(result){
					window.location.href="http://localhost/jobster/#/companyjobs";
				}
			});
		}
	});
	return false;
});

myApp.controller("companyjobsCtrl", function($scope){
	$("#slogin").hide();
	$("#sregister").hide();
	$("#clogin").show();
	$("#cregister").show();
	 $.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/companyshowjobs.php',
			cache: false,
			success: function(result){
				$("#jtitlejob").html("Title");
				$("#jcityjob").html("City");
				$("#jstatejob").html("State");
				$("#jdatejob").html("Post Date");
				$scope.joblength = result.info.length;
				$scope.jobs = result;
				$scope.$apply();
			},
	 		error: function(XMLHttpRequest, textStatus, errorThrown){
	 			$scope.joblength = 0
	 			$scope.jobs = "";
				$scope.$apply();
	 		}
	});
});

myApp.controller("companyviewjobCtrl", function($scope, $http, $routeParams){
	 var jid = $routeParams.jid;
	$("#slogin").hide();
	$("#sregister").hide();
	$("#clogin").show();
	$("#cregister").show();
	$("#viewjobnoedit").show();
	$("#viewjobedit").hide();
	 $.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/companyviewjob.php',
			cache: false,
			data: {jid, jid},
			success: function(result){
				$scope.viewjob = result;
				$scope.$apply();
			}
	});
	 $scope.editjob = function(i) {
			$("#viewjobnoedit").hide();
			$("#viewjobedit").show();
			$("#companymodifyjobsubmit").unbind("click").click(function(){
				var datastring = $("#companyeditjobform").serialize();
				var jtitle = $("#jtitle").val();
				
				if(jtitle == ""){
					$("#editjobinfomsg").html("Please fill out job title");
				}else{
					$.ajax({
						type: 'POST',
						url: 'http://localhost/jobster/webservices/companyeditjob.php',
						data: datastring,
						cache: false,
						success: function(result){
							window.location.href="http://localhost/jobster/#/companyjobs";
						}
					});
				}
			});
	 }
	 $scope.deletejob = function(i) {
	    if (confirm("Are you sure to delete this job post")) {
		   	 $.ajax({
					type: 'POST',
					url: 'http://localhost/jobster/webservices/companydeletejob.php',
					cache: false,
					data: {jid, jid},
					success: function(result){
						window.location.href="http://localhost/jobster/#/companyjobs";
					}
			});	        
	    }
	 }
	 $scope.applyjob = function(i) {
	   	 /*$.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/companydeletejob.php',
				cache: false,
				data: {jid, jid},
				success: function(result){
					window.location.href="http://localhost/jobster/#/companyjobs";
				}
		});	        */
		 window.alert("APPLIED");
    } 
	 $scope.forwardjob = function(i) {
	   	 /*$.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/companydeletejob.php',
				cache: false,
				data: {jid, jid},
				success: function(result){
					window.location.href="http://localhost/jobster/#/companyjobs";
				}
		});	        */
		 window.alert("FORWRD");
    } 
});
myApp.controller("jobsCtrl", function($scope){
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();
	$("#jobsearch").show();
	$("#jobsearchresult").hide();
	$("#jobsearchsubmit").unbind("click").click(function(){
		$("#jobsearch").hide();
		$("#jobsearchresult").show();
		var datastring = $("#jobsearchform").serialize();
		 $.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/studentsearchjob.php',
				cache: false,
				data: datastring,
				success: function(result){
					$("#cnamejob").html("Company Name");
					$("#jtitlejob").html("Title");
					$("#jcityjob").html("City");
					$("#jstatejob").html("State");
					$("#jdatejob").html("Post Date");
					$scope.alljoblength = result.info.length;
					$scope.alljobs = result;
					$scope.$apply();
				},
		 		error: function(XMLHttpRequest, textStatus, errorThrown){
		 			$scope.alljoblength = 0
		 			$scope.alljobs = "";
					$scope.$apply();
		 		}
		});
	});
	$scope.gobacktosearch = function(i) {
		$("#jobsearch").show();
		$("#jobsearchresult").hide();	
	}
});
myApp.controller("companylistCtrl", function($scope){
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();
  	 $.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/companylist.php',
			cache: false,
			success: function(result){
				$("#cnamecompany").html("Name");
				$("#chqcitycompany").html("HQ City");
				$("#chqstatecompany").html("HQ State");
				$("#cindustrycompany").html("Industry");
				$scope.companylistlength = result.info.length;
				$scope.companylist = result;
				$scope.$apply();
			}
	});
	 $scope.follow = function(i) {
		 var cid = $scope.companylist.info[i].cid;
	  	 $.ajax({
				type: 'POST',
				url: 'http://localhost/jobster/webservices/studentfollow.php',
				cache: false,
				data: {cid, cid},
				success: function(result){
					window.alert("Success! You are now following " + $scope.companylist.info[i].cname)
					$scope.$apply();
				}
		});		 
	 };
	 $scope.unfollow = function(i) {
		 if (confirm("Are you sure to unfollow " + $scope.companylist.info[i].cname)) {
			 var cid = $scope.companylist.info[i].cid;
		  	 $.ajax({
					type: 'POST',
					url: 'http://localhost/jobster/webservices/studentunfollow.php',
					cache: false,
					data: {cid, cid},
					success: function(result){
						window.alert("Success! You have unfollowed " + $scope.companylist.info[i].cname)
						$scope.$apply();
					}
			});
		 }
	 };
});

myApp.controller("companyviewCtrl", function($scope, $http, $routeParams){
 	var cid = $routeParams.cid;
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();
	 $.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/companyview.php',
			cache: false,
			data: {cid, cid},
			success: function(result){
				$scope.companyview = result;
				$scope.$apply();
				$.ajax({
					type: 'POST',
					url: 'http://localhost/jobster/webservices/companyjobindividual.php',
					cache: false,
					data: {cid, cid},
					success: function(result){
						$("#jtitlejob").html("Title");
						$("#jcityjob").html("City");
						$("#jstatejob").html("State");
						$("#jdatejob").html("Post Date");
						$scope.jobs = result;
						$scope.joblength = result.info.length;
						$scope.$apply();
					},
					error: function(XMLHttpRequest, textStatus, errorThrown){
						$scope.jobs = "";
						$scope.joblength = 0;
						$scope.$apply();
			 		}					
				});
			}
	});
});
myApp.controller("followingCtrl", function($scope){
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();	
 	 $.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/studentfollowing.php',
			cache: false,
			success: function(result){
				$("#cnamecompany").html("Name");
				$("#chqcitycompany").html("HQ City");
				$("#chqstatecompany").html("HQ State");
				$("#cindustrycompany").html("Industry");
				$scope.followinglength = result.info.length;
				$scope.following = result;
				$scope.$apply();
			},
		 	error: function(XMLHttpRequest, textStatus, errorThrown){
		 		$scope.followinglength = 0
		 		$scope.following = "";
				$scope.$apply();
			}
	});
	 $scope.unfollow = function(i) {
		 if (confirm("Are you sure to unfollow " + $scope.following.info[i].cname)) {
			 var cid = $scope.following.info[i].cid;
		  	 $.ajax({
					type: 'POST',
					url: 'http://localhost/jobster/webservices/studentunfollow.php',
					cache: false,
					data: {cid, cid},
					success: function(result){
						window.alert("Success! You have unfollowed " + $scope.following.info[i].cname)
					 	 $.ajax({
								type: 'POST',
								url: 'http://localhost/jobster/webservices/studentfollowing.php',
								cache: false,
								success: function(result){
									$("#cnamecompany").html("Name");
									$("#chqcitycompany").html("HQ City");
									$("#chqstatecompany").html("HQ State");
									$("#cindustrycompany").html("Industry");
									$scope.followinglength = result.info.length;
									$scope.following = result;
									$scope.$apply();
								},
							 	error: function(XMLHttpRequest, textStatus, errorThrown){
							 		$scope.followinglength = 0
							 		$scope.following = "";
									$scope.$apply();
								}
						});
					}
			});
		 }
	 };
});
myApp.controller("applicationCtrl", function($scope){
	$("#slogin").show();
	$("#sregister").show();
	$("#clogin").hide();
	$("#cregister").hide();	
	 $.ajax({
			type: 'POST',
			url: 'http://localhost/jobster/webservices/studentapplications.php',
			cache: false,
			success: function(result){
				$("#cnamejob").html("Company Name");
				$("#jtitlejob").html("Title");
				$("#adatejob").html("Applied Date");
				$scope.applicationlength = result.info.length;
				$scope.applications = result;
				$scope.$apply();
			},
		 	error: function(XMLHttpRequest, textStatus, errorThrown){
		 		$scope.applicationlength = 0
		 		$scope.applications = "";
				$scope.$apply();
			}
	});
});