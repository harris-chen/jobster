<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#/searchjobs" >Search Jobs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/companylist">Company List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/following">Following</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#/applications">My Applications</a>
  </li>
</ul>

<div ng-controller="jobsCtrl" >
	<div id="jobsearch">
	<form id="jobsearchform" >
	<br>
	<legend>Search for jobs</legend>
	  <fieldset>
	  	<div class="form-group">
	      <label>Company Name</label>
	      <input id="cname" ng-model="cname" name = "cname" class="form-control"  type="text">
	    </div>
	  
	   	<div class="form-group">
	      <label>Job Title</label>
	      <input id="jtitle" ng-model="jtitle" name = "jtitle" class="form-control"  type="text">
	    </div>
	    
	   	<div class="form-group">
	      <label>Job Location City</label>
	      <input id="jcity" ng-model="jcity" name = "jcity" class="form-control"  type="text">
	    </div>
	    
	    <div class="form-group">
	      <label for="exampleSelect1">Job Loctaion State</label>
	      <select ng-model="jstate" name = "jstate" class="form-control" id="jstate">
                <option>AK</option>
                <option>AZ</option>
                <option>AR</option>
                <option>CA</option>
                <option>CO</option>
                <option>CT</option>
                <option>DE</option>
                <option>FL</option>
                <option>GA</option>
                <option>HI</option>
                <option>ID</option>
                <option>IL</option>
                <option>IN</option>
                <option>IA</option>
                <option>KS</option>
                <option>KY</option>
                <option>LA</option>
                <option>ME</option>
                <option>MD</option>
                <option>MA</option>
                <option>MI</option>
                <option>MN</option>
                <option>MS</option>
                <option>MO</option>
                <option>MT</option>
                <option>NE</option>
                <option>NV</option>
                <option>NH</option>
                <option>NJ</option>
                <option>NM</option>
                <option>NY</option>
                <option>NC</option>
                <option>ND</option>
                <option>OH</option>
                <option>OK</option>
                <option>OR</option>
                <option>PA</option>
                <option>RI</option>
                <option>SC</option>
                <option>SD</option>
                <option>TN</option>
                <option>TX</option>
                <option>UT</option>
                <option>VT</option>
                <option>VA</option>
                <option>WA</option>
                <option>WV</option>
                <option>WI</option>
                <option>WY</option>
	      </select>
	    </div>
			    
	   	<div class="form-group">
	      <label>Salary Requirement</label>
	      <input id="jsalary" ng-model="jsalary" name = "jsalary" class="form-control"  type="number" min="0" >
	    </div>
	    
	    <div class="form-group">
	      <label for="exampleSelect1">Degree Level</label>
	      <select ng-model="jdegree" name = "jdegree" class="form-control" id="jdegree">
	        <option>Bachelor of Science (BS)</option>
	        <option>Bachelor of Arts (BA)</option>
	        <option>Master of Science (MS)</option>
	        <option>Master of Business Administration (MBA)</option>
	        <option>Doctor of Philosophy (PhD)</option>
	      </select>
	    </div>

	    <div class="form-group">
	      <label for="exampleSelect1">Major</label>
	      <select ng-model="jmajor" name = "jmajor" class="form-control" id="jmajor">
			<option>Accounting</option>
			<option>Actuarial Science</option>
			<option>Advertising</option>
			<option>Agriculture</option>
			<option>Agricultural and Biological Engineering</option>
			<option>Agricultural Business Management</option>
			<option>Agriculture Economics</option>
			<option>Animal Bioscience</option>
			<option>Animal Sciences</option>
			<option>Anthropology</option>
			<option>Applied Mathematics</option>
			<option>Archaeology</option>
			<option>Architectural Engineering</option>
			<option>Architecture</option>
			<option>Art History</option>
			<option>Studio Art</option>
			<option>Art Education</option>
			<option>Biobehavioral Health</option>
			<option>Biochemistry</option>
			<option>Bioengineering</option>
			<option>Biology</option>
			<option>Biophysics</option>
			<option>Biotechnology</option>
			<option>Business Administration and Management</option>
			<option>Business Logistics</option>
			<option>Chemical Engineering</option>
			<option>Chemistry</option>
			<option>Children</option>
			<option>Civil Engineering</option>
			<option>Computer Engineering</option>
			<option>Computer Science</option>
			<option>Crime, Law, and Justice</option>
			<option>Dance</option>
			<option>Earth Sciences</option>
			<option>Economics</option>
			<option>Electrical Engineering</option>
			<option>Elementary and Kindergarten Education</option>
			<option>Engineering Science</option>
			<option>English</option>
			<option>Environmental Systems Engineering</option>
			<option>Environmental Sciences</option>
			<option>Environmental Resource Management</option>
			<option>Film and Video</option>
			<option>Finance</option>
			<option>Food Science</option>
			<option>Forest Science</option>
			<option>Forest Technology</option>
			<option>General Science</option>
			<option>Geography</option>
			<option>Geosciences</option>
			<option>Graphic Design and Photography</option>
			<option>Health and Physical Education</option>
			<option>Health Policy and Administration</option>
			<option>History</option>
			<option>Horticulture</option>
			<option>Hotel, Restaurant, and Institutional Management</option>
			<option>Human Development and Family Studies</option>
			<option>Individual and Family Studies</option>
			<option>Industrial Engineering</option>
			<option>Information Sciences and Technology</option>
			<option>Journalism</option>
			<option>Kinesiology</option>
			<option>Landscape Architecture</option>
			<option>Law Enforcement and Correction</option>
			<option>Marine Biology</option>
			<option>Marketing</option>
			<option>Mathematics</option>
			<option>Mechanical Engineering</option>
			<option>Media Studies</option>
			<option>Meteorology</option>
			<option>Microbiology</option>
			<option>Mineral Economics</option>
			<option>Modern Languages</option>
			<option>Music Education</option>
			<option>Nuclear Engineering</option>
			<option>Nursing</option>
			<option>Nutrition</option>
			<option>Philosophy</option>
			<option>Physics</option>
			<option>Physiology</option>
			<option>Political Science</option>
			<option>Pre-medicine</option>
			<option>Psychology</option>
			<option>Public Relations</option>
			<option>Real Estate</option>
			<option>Recreation and Parks</option>
			<option>Rehabilitation Services</option>
			<option>Religious Studies</option>
			<option>Secondary Education</option>
			<option>Sociology</option>
			<option>Social Work</option>
			<option>Special Education</option>
			<option>Speech Communication</option>
			<option>Speech Pathology and Audiology/Communication Disorder</option>
			<option>Statistics</option>
			<option>Telecommunications</option>
			<option>Theater</option>
			<option>Wildlife and Fishery Science</option>
			<option>Wildlife Technology</option>
			<option>Women's Studies</option>
	      </select>
	    </div>	    
	    
		<div class="form-group">
	      <label for="exampleTextarea">Job Description Contains</label>
	      <input id="jdescription" ng-model="jdescription" name = "jdescription" class="form-control"  type="text" placeholder="ex: Java">
	    </div>


	    <button type="submit" id="jobsearchsubmit" class="btn btn-primary">Submit</button>
		<br><br>
	  </fieldset>
	</form>
	</div>
	
	
	
	
	<div id="jobsearchresult">
	
	<br>
	<legend>There are {{alljoblength}} jobs matching your result <button type="submit" ng-click="gobacktosearch()" class="btn btn-primary">Go back</button></legend>
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
	    <tr ng-repeat="r in alljobs.info">
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

</div>