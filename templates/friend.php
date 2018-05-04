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
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#messages">Messages</a>
  </li>
</ul>

<div ng-controller="friendCtrl">
	<br>
	<legend >You have {{friendlength}} friends</legend>
	
		<form >
	<table class="table table-hover">
	  <thead>
	  
	    <tr>
	      <th id="fnfriend" scope="col"></th>
	      <th id="emfriend" scope="col"></th>
	      <th id="uvfriend" scope="col"></th>
	      <th id="dgfriend" scope="col"></th>
	      <th id="mgfriend" scope="col"></th>
	      <th id="acfriend" scope="col"></th>
	      <th id="acfriend" scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr ng-repeat="r in friends.info">
	      <td>{{r.sfname}} {{r.slname}}</td>
	      <td>{{r.semail}}</td>
	      <td>{{r.suniversity}}</td>
	      <td>{{r.sdegree}}</td>
	      <td>{{r.smajor}}</td>
	      <td><a ng-href="#/students/{{r.semail}}" class="btn btn-primary">View Detail</a></td>
	    </tr>
	  </tbody>
	</table> 
	</form>
</div>