<div ng-controller="companyjobsCtrl">
	<br>
	<legend>There are {{joblength}} jobs posted</legend>
		<form >
	<table class="table table-hover">
	  <thead>
	  
	    <tr>
	      <th id="jtitlejob" scope="col"></th>
	      <th id="jcityjob" scope="col"></th>
	      <th id="jstatejob" scope="col"></th>
	      <th id="jdatejob" scope="col"></th>
	      <th id="statusjob" scope="col"></th>
	      <th id="acjob" scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr ng-repeat="r in jobs.info">
	      <td>{{r.jtitle}}</td>
	      <td>{{r.jcity}}</td>
	      <td>{{r.jstate}}</td>
	      <td>{{r.jdate}}</td>
	      <td>{{r.jstatus}}</td>
	      <td><a ng-href="#/jobs/{{r.jid}}" class="btn btn-primary">View Detail</a></td>
	    </tr>
	  </tbody>
	</table> 
	</form>
</div>