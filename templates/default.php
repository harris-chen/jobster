<?php 
session_start();
if(!isset($_SESSION['company'])){
?>
<div ng-controller="defaultCtrl">
	<div class="jumbotron">
	  <h1 class="display-3">Hello, students!</h1>
	  <p class="lead">Jobster is a new social website helping you to find a job</p>
	  <hr class="my-4">
	  <p>Our partner includes-</p>
	  <img src="assets/img/Companies.png" >
	</div>
</div>
<?php 
}else{
?>
<div ng-controller="companydefaultCtrl">
	<div class="jumbotron">
	  <h1 class="display-3">Hello, employers!</h1>
	  <p class="lead">Jobster is the perfect platform to find candidates</p>
	  <hr class="my-4">
	  <p>Our students includes-</p>
	  <img src="assets/img/Schools.png" >
	</div>
</div>

<?php 
}
?>