<div class="row">
	<div class="col-md-12" >
		<div ng-controller="allnetworkCtrl">
			<table class="table table-hover">
			  <thead>
			  
			    <tr>
			      <th scope="col">First Name</th>
			      <th scope="col">Last Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">University</th>
			      <th scope="col">Degree</th>
			      <th scope="col">Major</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr ng-repeat="network in networks.info">
			      
			      <td>{{network.sfname}}</td>
			      <td>{{network.slname}}</td>
			      <td>{{network.semail}}</td>
			      <td>{{network.suniversity}}</td>
			      <td>{{network.sdegree}}</td>
			      <td>{{network.smajor}}</td>
			      <td><button type="button" class="btn btn-secondary">Add Friend</button></td>
			    </tr>
			  </tbody>
			</table> 
		</div>
	</div>
</div>