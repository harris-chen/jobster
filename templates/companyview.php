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
    <a class="nav-link" data-toggle="tab" href="#/applications">My Applications</a>
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
    
    
    <br>
	<legend>There are {{joblength}} jobs posted </legend>
		<form >
	<table class="table table-hover">
	  <thead>
	  
	    <tr>
	      <th id="jtitlejob" scope="col"></th>
	      <th id="jcityjob" scope="col"></th>
	      <th id="jstatejob" scope="col"></th>
	      <th id="jdatejob" scope="col"></th>
	      <th id="acjob" scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr ng-repeat="r in jobs.info">
	      <td>{{r.jtitle}}</td>
	      <td>{{r.jcity}}</td>
	      <td>{{r.jstate}}</td>
	      <td>{{r.jdate}}</td>
	      <td><a ng-href="#/jobs/{{r.jid}}" class="btn btn-primary">View Detail</a></td>
	    </tr>
	  </tbody>
	</table> 
	</form>	
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