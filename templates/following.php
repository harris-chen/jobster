<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/searchjobs" >Search Jobs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/companylist">Company List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#/following">Following</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#">My Applications</a>
  </li>
</ul>

<div ng-controller="followingCtrl">
	<br>
	<legend >You followed {{followinglength}} companies</legend>
	
		<form >
	<table class="table table-hover">
	  <thead>
	  
	    <tr>
	      <th id="cnamecompany" scope="col"></th>
	      <th id="chqcitycompany" scope="col"></th>
	      <th id="chqstatecompany" scope="col"></th>
	      <th id="cindustrycompany" scope="col"></th>
	      <th id="accompanylist" scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr ng-repeat="r in following.info">
	      <td>{{r.cname}}</td>
	      <td>{{r.chqcity}}</td>
	      <td>{{r.chqstate}}</td>
	      <td>{{r.cindustry}}</td>
	      <td><a ng-href="#/companies/{{r.cid}}" class="btn btn-primary">View Detail</a>&nbsp; &nbsp;
	      <button type="submit" ng-click="unfollow($index)" class="btn btn-secondary">Unfollow</button></td>
	    </tr>
	  </tbody>
	</table> 
	</form>
</div>