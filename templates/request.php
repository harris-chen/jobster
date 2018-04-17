<div ng-controller="requestCtrl">
	<br>
	<legend >You have {{requestlength}} friend requests</legend>
	
		<form >
	<table class="table table-hover">
	  <thead>
	  
	    <tr>
	      <th id="fnrequest" scope="col"></th>
	      <th id="lnrequest" scope="col"></th>
	      <th id="emrequest" scope="col"></th>
	      <th id="uvrequest" scope="col"></th>
	      <th id="dgrequest" scope="col"></th>
	      <th id="mgrequest" scope="col"></th>
	      <th id="acrequest" scope="col"></th>
	      <th id="acrequest" scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr ng-repeat="r in requests.info">
	      <td>{{r.sfname}}</td>
	      <td>{{r.slname}}</td>
	      <td>{{r.semail}}</td>
	      <td>{{r.suniversity}}</td>
	      <td>{{r.sdegree}}</td>
	      <td>{{r.smajor}}</td>
	      <td><button type="submit" ng-click="accept($index)" class="btn btn-primary">Accept</button></td>
	      <td><button type="submit" ng-click="decline($index)" class="btn btn-secondary">Decline</button></td>
	    </tr>
	  </tbody>
	  <font id="msg" color="red"></font>
	</table> 
	</form>
</div>