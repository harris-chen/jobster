<div ng-controller="companyapplicationsCtrl">
	<br>
	<div ng-repeat="r in companyapplications" >
	<legend>{{r[0].jtitle}}</legend>
	<table class="table table-hover">
	<thead>
		<tr>
	      <th scope="col">Name</th>
	      <th scope="col">University</th>
	      <th scope="col">Degree</th>
	      <th scope="col">Major</th>
	      <th scope="col">GPA</th>
	      <th scope="col"></th>
	    </tr>
	</thead>
	<tbody>
	    <tr ng-repeat="x in r">
	     <td>{{x.sfname}} {{x.slname}} </td>
	     <td>{{x.suniversity}}</td>
	     <td>{{x.sdegree}}</td>
	     <td>{{x.smajor}}</td>
	     <td>{{x.sgpa}}</td>
	     <td><a ng-href="#/students/{{x.semail}}" class="btn btn-primary">View Detail</a></td>
	    </tr>	
	</tbody>
	</table>
	<br>
	</div>

</div>