<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/searchjobs" >Search Jobs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/companylist">Company List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/following">Following</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#/applications">My Applications</a>
  </li>
</ul>

<div ng-controller="applicationCtrl" >
	<br>
	<legend>There are {{applicationlength}} jobs you've applied</legend>
		<form >
	<table class="table table-hover">
	  <thead>
	  
	    <tr>
	      <th id="cnamejob" scope="col"></th>
	      <th id="jtitlejob" scope="col"></th>
	      <th id="adatejob" scope="col"></th>
	      <th id="acjob" scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr ng-repeat="r in applications.info">
	      <td>{{r.cname}}</td>
	      <td>{{r.jtitle}}</td>
	      <td>{{r.adate}}</td>
	      <td><a ng-href="#/jobs/{{r.jid}}" class="btn btn-primary">View Detail</a></td>
	    </tr>
	  </tbody>
	</table> 
	</form>	
</div>