<div ng-controller="registerCtrl">
	<br>
	<form id="registerform">
	  <fieldset>
	    <legend>Please fill out your information</legend>
	    <div class="form-group">
	      <label for="exampleInputEmail1">Email address*</label>
	      <input ng-model="semail" name = "semail" class="form-control" id="semail" aria-describedby="emailHelp" placeholder="Enter email" type="email">
	      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
	    </div>
	    <div class="form-group">
	      <label for="exampleInputPassword1">Password*</label>
	      <input ng-model="spassword" name = "spassword" class="form-control" id="spassword" placeholder="Password 6-30 Characters" type="password">
	    </div>
	    
	   	<div class="form-group">
	      <label>First Name*</label>
	      <input id="sfname" ng-model="sfname" name = "sfname" class="form-control"  type="text">
	    </div>
	    
	   	<div class="form-group">
	      <label>Last Name*</label>
	      <input id="slname" ng-model="slname" name = "slname" class="form-control"  type="text">
	    </div>
	    
	    <div class="form-group">
	      <label for="exampleSelect1">University*</label>
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
	      <label for="exampleSelect1">Degree Level*</label>
	      <select ng-model="sdegree" name = "sdegree" class="form-control" id="sdegree">
	        <option>Bachelor of Science (BS)</option>
	        <option>Bachelor of Arts (BA)</option>
	        <option>Master of Science (MS)</option>
	        <option>Master of Business Administration (MBA)</option>
	        <option>Doctor of Philosophy (PhD)</option>
	      </select>
	    </div>
	    
	    <div class="form-group">
	      <label for="exampleSelect1">Major*</label>
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
	      <label>GPA*</label>
	      <input id="sgpa" ng-model="sgpa" name = "sgpa" class="form-control"  type="number" placeholder="Round to 2 decimal places" step="0.01" min="0" max="4">
	    </div>	    
	    
		<div class="form-group">
	      <label for="exampleTextarea">Introduce yourself</label>
	      <textarea "ng-model="sintro"  name = "sintro" class="form-control" id="sintro" rows="3"></textarea>
	    </div>
	    
	    
	    <div class="form-group">
	      <label for="exampleInputFile">Resume</label>
	      <input class="form-control-file" id="sresume" ng-model="sresume" name = "sresume" aria-describedby="fileHelp" type="file">
	      <small id="fileHelp" class="form-text text-muted">Please select resume in txt file</small>
	    </div>	 
	    
	    <div class="form-group">
	      <label for="exampleInputFile">Profile Picture</label>
	      <input class="form-control-file" id="simage" ng-model="simage" name = "simage" aria-describedby="fileHelp" type="file">
	      <small id="fileHelp" class="form-text text-muted">Recommended size 300*300</small>
	    </div>	   
	    
	    
		<label for="exampleTextarea">Personal Info Restriction (GPA/Resume)</label>
		<br>
        <div class="custom-control custom-radio">
          <input "ng-model="srestriction" id="customRadio1" name="srestriction" class="custom-control-input" checked="" value="false" type="radio">
          <label class="custom-control-label" for="customRadio1">Show all info to public</label>
        </div>
        <div class="custom-control custom-radio">
          <input "ng-model="srestriction" id="customRadio2" name="srestriction" class="custom-control-input" value="true" type="radio">
          <label class="custom-control-label" for="customRadio2">Only show all info to friends and company I applied</label>
        </div>
        
        <br>
	    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
	    
	    <font id="infomsg" color="red"></font>
	    
	    <br>
	    <br>
		
	  </fieldset>
	</form>
	

</div>
<br>