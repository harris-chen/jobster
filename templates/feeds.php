<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#feeds">Job Feeds</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/forwarded">Forwarded by Friends</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/notifications">Company Notifications</a>
  </li>
</ul>

<div ng-controller="feedsCtrl">
	<br>
	<legend>Jobs from companies I follow</legend>
			<form >
	<table class="table table-hover">
	  <thead>
	  
	    <tr>
	      <th id="cnamejob" scope="col"></th>
	      <th id="jtitlejob" scope="col"></th>
	      <th id="jcityjob" scope="col"></th>
	      <th id="jstatejob" scope="col"></th>
	      <th id="jdatejob" scope="col"></th>
	      <th id="acjob" scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr ng-repeat="r in jobsIfollow.info">
	      <td>{{r.cname}}</td>
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