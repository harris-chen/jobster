<?php 
    session_start();
    if(isset($_SESSION['userid'])){?>
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
    <br>
	<?php 
    }
?>
<div ng-controller="companyviewjobCtrl">
	
	<div style="margin:0 auto; " id="viewjobnoedit">
          <table style="font-size: 120%; width:100%; " >
          <tr>
            <th>Company:</th>
            <td>{{viewjob.info[0].cname}}&nbsp;&nbsp;
             <?php if(isset($_SESSION['company'])){ ?>
             <button type="submit" ng-click="editjob()" class="btn btn-primary">Edit</button>
             <button type="submit" ng-click="deletejob()" class="btn btn-secondary">Delete</button> 
             <button type="submit" ng-click="notification()" class="btn btn-info">Send Notifications</button>
             <?php }else if(isset($_SESSION['userid'])){?>
             <button type="submit" ng-click="applyjob()" class="btn btn-primary">Apply</button> 
             <button type="submit" ng-click="forwardjob()" class="btn btn-info">Forward</button> 
             <?php }?>
             </td>
          </tr>
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
            <td style="white-space: pre-wrap;">{{viewjob.info[0].jdescription}}</td>
          </tr>
          <tr>
            <th>Date Published</th>
            <td>{{viewjob.info[0].jdate}}</td>
          </tr>
          </table>
    </div>
    
    
    
    
    <div id="viewjobedit">
	<form id="companyeditjobform">
	  <fieldset>
	    <legend>Basic Information</legend>
	   	<div class="form-group">
	      <label>Title</label>
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
	      <label>Salary</label>
	      <input id="jsalary" ng-model="jsalary" name = "jsalary" class="form-control"  type="number" min="0" >
	    </div>
	    
	    	    
	    <br>
	    <legend>Qualifications</legend>
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
	      <label for="exampleTextarea">Job Description</label>
	      <textarea "ng-model="jdescription"  name = "jdescription" class="form-control" id="jdescription" rows="5"></textarea>
	    </div>


	    <button type="submit" id="companymodifyjobsubmit" class="btn btn-primary">Submit</button>
	    
	    <font id="editjobinfomsg" color="red"></font>
	    
	    <br>
	    <br>
		
	  </fieldset>
	</form>
	

	</div>
	
	
	<div id="forwardpage">
	<legend>{{viewjob.info[0].jtitle}}, {{viewjob.info[0].cname}}</legend>
		<legend >Send a message and forward this job to your friend</legend>
	

	<table class="table table-hover">
	  <thead>
	  
	    <tr>
	      <th id="fnfriend" scope="col"></th>
	      <th id="emfriend" scope="col"></th>
	      <th id="uvfriend" scope="col"></th>
	      <th id="dgfriend" scope="col"></th>
	      <th id="mgfriend" scope="col"></th>
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
	      <td><button type="submit" ng-click="sendforward($index)" class="btn btn-primary">Send a message!</button></td>
	    </tr>
	  </tbody>
	</table> 
	</div>
	
	
	
	
	<div id="pushnotification">
	<br>
	<form id="notificationform">
	  <fieldset>
	    <legend>Push {{viewjob.info[0].jtitle}} to students matching below criteria</legend>
	    
	    <div class="form-group">
	      <label for="exampleSelect1">University</label>
	      <select ng-model="suniversity" name = "suniversity" class="form-control" id="suniversity">
				<option>American University</option>
				<option>Arizona State University</option>
				<option>Boston College</option>
				<option>Boston University</option>
				<option>Brandeis University</option>
				<option>Brown University</option>
				<option>California Institute of Technology (Caltech)</option>
				<option>Carnegie Mellon University</option>
				<option>Case Western Reserve University</option>
				<option>City University of New York</option>
				<option>Clark University </option>
				<option>Colorado State University</option>
				<option>Columbia University</option>
				<option>Cornell University</option>
				<option>Dartmouth College </option>
				<option>Drexel University</option>
				<option>Duke University</option>
				<option>Emory University</option>
				<option>Florida State University</option>
				<option>George Washington University</option>
				<option>Georgetown University </option>
				<option>Georgia Institute of Technology</option>
				<option>Harvard University</option>
				<option>Illinois Institute of Technology</option>
				<option>Indiana University Bloomington</option>
				<option>Iowa State University</option>
				<option>Johns Hopkins University</option>
				<option>Lehigh University</option>
				<option>Massachusetts Institute of Technology (MIT)</option>
				<option>Michigan State University</option>
				<option>New York University</option>
				<option>North Carolina State University</option>
				<option>Northeastern University</option>
				<option>Northwestern University</option>
				<option>Oregon State University</option>
				<option>Pennsylvania State University</option>
				<option>Princeton University</option>
				<option>Purdue University</option>
				<option>Rensselaer Polytechnic University</option>
				<option>Rice University</option>
				<option>Rutgers University - New Brunswick</option>
				<option>Stanford University</option>
				<option>Stony Brook University, State University of New York</option>
				<option>Syracuse University</option>
				<option>Texas A&M University</option>
				<option>The Katz School at Yeshiva University</option>
				<option>The Ohio State University</option>
				<option>The University of Arizona</option>
				<option>The University of Georgia</option>
				<option>The University of Tennessee, Knoxville</option>
				<option>Tufts University</option>
				<option>Tulane University</option>
				<option>University at Buffalo SUNY</option>
				<option>University of California, Berkeley (UCB)</option>
				<option>University of California, Davis</option>
				<option>University of California, Irvine</option>
				<option>University of California, Los Angeles (UCLA)</option>
				<option>University of California, Riverside</option>
				<option>University of California, San Diego (UCSD)</option>
				<option>University of California, Santa Barbara (UCSB)</option>
				<option>University of California, Santa Cruz</option>
				<option>University of Chicago</option>
				<option>University of Cincinnati</option>
				<option>University of Colorado Boulder</option>
				<option>University of Colorado, Denver</option>
				<option>University of Connecticut</option>
				<option>University of Delaware</option>
				<option>University of Florida</option>
				<option>University of Illinois at Urbana-Champaign</option>
				<option>University of Illinois, Chicago (UIC)</option>
				<option>University of Iowa</option>
				<option>University of Kansas</option>
				<option>University of Maryland, Baltimore County</option>
				<option>University of Maryland, College Park</option>
				<option>University of Massachusetts Amherst</option>
				<option>University of Miami</option>
				<option>University of Michigan</option>
				<option>University of Minnesota</option>
				<option>University of Nebraska-Lincoln</option>
				<option>University of New Mexico</option>
				<option>University of North Carolina, Chapel Hill</option>
				<option>University of Notre Dame</option>
				<option>University of Oklahoma</option>
				<option>University of Pennsylvania</option>
				<option>University of Pittsburgh</option>
				<option>University of Rochester</option>
				<option>University of South Florida</option>
				<option>University of Southern California</option>
				<option>University of Texas at Austin</option>
				<option>University of Texas Dallas </option>
				<option>University of Utah</option>
				<option>University of Virginia</option>
				<option>University of Washington</option>
				<option>University of Wisconsin-Madison</option>
				<option>Vanderbilt University</option>
				<option>Virginia Polytechnic Institute and State University</option>
				<option>Wake Forest University</option>
				<option>Washington State University</option>
				<option>Washington University in St. Louis</option>
				<option>Wayne State University</option>
				<option>Yale University</option>
	      </select>
	    </div>
	    
	    <div class="form-group">
	      <label for="exampleSelect1">Degree Level</label>
	      <select ng-model="sdegree" name = "sdegree" class="form-control" id="sdegree">
	        <option>Bachelor of Science (BS)</option>
	        <option>Bachelor of Arts (BA)</option>
	        <option>Master of Science (MS)</option>
	        <option>Master of Business Administration (MBA)</option>
	        <option>Doctor of Philosophy (PhD)</option>
	      </select>
	    </div>
	    
	    <div class="form-group">
	      <label for="exampleSelect1">Major</label>
	      <select ng-model="smajor" name = "smajor" class="form-control" id="smajor">
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
	      <label>GPA</label>
	      <input id="sgpa" ng-model="sgpa" name = "sgpa" class="form-control"  type="number" placeholder="Round to 2 decimal places" step="0.01" min="0" max="4">
	    </div>	    

	   	<div class="form-group">
	      <label>Resume contains</label>
	      <input id="sresume" ng-model="sresume" name = "sresume" class="form-control"  type="text" placeholder="Ex: database systems">
	    </div>	    
	    <br>
	    <button type="submit" id="pushnotificationsubmit" class="btn btn-primary">Send Notifications</button>
	    
	    <br>
	    <br>
		
	  </fieldset>
	</form>
	
	

	</div>
</div>

<style>
th, td {
    padding: 10px;
}
</style>