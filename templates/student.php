<?php 
    session_start();
    if(isset($_SESSION['userid'])){?>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab"  href="#network">Search</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" >My Friends</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#requests">Friend Requests</a>
  </li>
</ul>
<?php 
    }
?>

<div class="horizontalDIV" ng-controller="studentCtrl" >
    <div class="left">
    <img ng-src="data:image/JPEG;base64,{{profile.info[0].simage}}">
    </div>
    
    
    
    
    <div class="right" >
        <br>
        <br>
        <form>
        <legend>{{profile.info[0].sfname}} {{profile.info[0].slname}} </legend></form>
    	<legend>{{profile.info[0].suniversity}}</legend>
    	<legend>{{profile.info[0].sdegree}}, {{profile.info[0].smajor}}</legend>
    	<hr class="my-4">
    	<p>{{profile.info[0].sintro}}</p>
    	<br>
    	
    	<?php if(isset($_SESSION['companyid'])){?>
    	<form action = "http://localhost/jobster/webservices/studentresumedownload.php" method="post">
    	<input id="semail" ng-model="semail" name = "semail" type="hidden" value="{{profile.info[0].semail}}">
    	<button type="submit" class="btn btn-primary">Download Resume</button>
    	</form>
    	<?php }?>
    </div>
</div>

<style type="text/css">
    div.horizontalDIV {
        margin: 15px;   
    }
    div.left {
        float: left;
        padding: 50px;    
    }
    div.right {
        float: left;
        padding: 10px;  
        max-width: 750px; 
    }
</style>