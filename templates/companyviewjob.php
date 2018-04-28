<div ng-controller="companyviewjobCtrl">
	<br><br>
	
	<div style="margin:0 auto; ">
          <table style="font-size: 150%; width:100%; " >
          <tr>
            <th>Title:</th>
            <td>{{viewjob.info[0].jtitle}}</td>
          </tr>
          <tr>
            <th>Location:</th>
            <td>{{viewjob.info[0].jcity}}, {{viewjob.info[0].jstate}}</td>
          </tr>
          <tr>
            <th>Salary:</th>
            <td>{{viewjob.info[0].jsalary}}</td>
          </tr>
          <tr>
            <th>Qualifications:</th>
            <td>{{viewjob.info[0].jdegree}}</td>
          </tr>
          <tr>
            <th></th>
            <td>{{viewjob.info[0].jmajor}}</td>
          </tr>
          <tr>
            <th>Description</th>
            <td>{{viewjob.info[0].jdescription}}</td>
          </tr>
          </table>
    </div>
</div>

<style>
th, td {
    padding: 10px;
}
</style>