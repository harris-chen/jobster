<div ng-controller="friendCtrl">
	<br>
	<legend >You have {{friendlength}} friends</legend>
	
		<form >
	<table class="table table-hover">
	  <thead>
	  
	    <tr>
	      <th id="fnfriend" scope="col"></th>
	      <th id="lnfriend" scope="col"></th>
	      <th id="emfriend" scope="col"></th>
	      <th id="uvfriend" scope="col"></th>
	      <th id="dgfriend" scope="col"></th>
	      <th id="mgfriend" scope="col"></th>
	      <th id="acfriend" scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr ng-repeat="r in friends.info">
	      <td>{{r.sfname}}</td>
	      <td>{{r.slname}}</td>
	      <td>{{r.semail}}</td>
	      <td>{{r.suniversity}}</td>
	      <td>{{r.sdegree}}</td>
	      <td>{{r.smajor}}</td>
	      <td><button type="submit" ng-click="accept($index)" class="btn btn-primary">View Detail</button></td>
	    </tr>
	  </tbody>
	</table> 
	</form>
</div>