<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/searchjobs" >Search Jobs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#/companylist">Company List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/following">Following</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#">My Applications</a>
  </li>
</ul>
<div class="horizontalDIV" ng-controller="companyviewCtrl">
	
    <div class="left">
    <img ng-src="data:image/JPEG;base64,{{companyview.info[0].cimage}}">
    </div>
    
    
    
    
    <div class="right" >
        <br>
        <br>
        <legend>{{companyview.info[0].cname}}</legend>
    	<legend>{{companyview.info[0].cindustry}}</legend>
    	<legend>{{companyview.info[0].chqcity}}, {{companyview.info[0].chqstate}}</legend>
    	<hr class="my-4">
    	<p>{{companyview.info[0].cintro}}</p>
    	<br>
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