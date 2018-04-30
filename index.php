<?php
  session_start();  
  //$_SESSION['user'] = "Hao";
  //$_SESSION['userid'] = "hao.chen@nyu.edu";
  //$_SESSION['user'] = "Yiju";
  //$_SESSION['userid'] = "yiju.lai@nyu.edu";
  //$_SESSION['company'] = "Facebook";
  //$_SESSION['companyid'] = "admin@facebook.com";
  //session_unset();
?>
<!DOCTYPE html>
<meta charset="utf-8"/>
<html ng-app="jobster">
<head>
	<title>Jobster</title>
	<script type="text/javascript" src = "assets/js/jquery-3.1.0.js"><</script>
	<script type="text/javascript" src = "assets/js/bootstrap.js"><</script>
	<script type="text/javascript" src = "assets/js/angular.js"><</script>
	<script type="text/javascript" src = "assets/js/angular-route.js"><</script>
	<script type="text/javascript" src = "assets/js/app.js"><</script>
	<link rel="stylesheet" type = "text/css" href = "assets/css/bootstrap.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" style="color:white;">Jobster</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">

	      <?php
			if(isset($_SESSION['user'])){
		  ?>
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#/searchjobs">Jobs</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#/network">Networks</a>
	      </li> 
	      <li class="nav-item active">
	        <a class="nav-link" href="#/profile">Profile</a>
	      </li>
	      <?php
		  }else if(isset($_SESSION['company'])){
		  ?>
		  <li class="nav-item active">
	        <a class="nav-link" href="#">Home</a>
	      </li> 
	      <li class="nav-item active">
	        <a class="nav-link" href="#/companyjobs">Jobs</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#/companypostjob">Post</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#/companyapplications">Applications</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#/companyprofile">Profile</a>
	      </li>
		  <?php
		  }else{
		  ?>
		  <li class="nav-item active">
	        <a class="nav-link" href="#">Home</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#/employer">Employer/Post Jobs</a>
	      </li>
	      <?php
		  }
	      ?>
	    </ul>
	    
	    <?php
		if(isset($_SESSION['user'])){
		?>
	    	<a class="navbar-brand" href="#">Hi, <?php echo $_SESSION['user'] ?></a>
	    	<form class="form-inline my-2 my-lg-0" action = "#/logout">
		      	<button class="btn btn-secondary my-2 my-sm-0" type="submit">Log out</button>
	        </form>
	    <?php 
		}else if(isset($_SESSION['company'])){
		?>
	    	<a class="navbar-brand" href="#">Hi, <?php echo $_SESSION['company'] ?></a>
	    	<form class="form-inline my-2 my-lg-0" action = "#/companylogout">
		      	<button class="btn btn-secondary my-2 my-sm-0" type="submit">Log out</button>
	        </form>			
		<?php 
		}else{
	    ?>
		  <form class="form-inline my-2 my-lg-0" action = "#/login" id="slogin">
	      	<button class="btn btn-secondary my-2 my-sm-0" type="submit">Login</button>
	      	&nbsp; &nbsp; 
	      </form>
		  <form class="form-inline my-2 my-lg-0" action = "#/register" id="sregister">
	      	<button class="btn btn-secondary my-2 my-sm-0" type="submit">Register</button>
	      	&nbsp; &nbsp; 
	      </form>	
	      <form class="form-inline my-2 my-lg-0" action = "#/companylogin" id="clogin">
	      	<button class="btn btn-secondary my-2 my-sm-0" type="submit">Company Login</button>
	      	&nbsp; &nbsp; 
	      </form>
		  <form class="form-inline my-2 my-lg-0" action = "#/companyregister" id="cregister">
	      	<button class="btn btn-secondary my-2 my-sm-0" type="submit">Company Register</button> 
	      </form>	
	    <?php 
	    	}
	    ?>	      
	  </div>
	</nav>
	
	
	<div class = "container">
		<ng-view></ng-view>
	</div>
	
</body>

</html>