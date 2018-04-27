<div ng-controller="companyregisterCtrl">
	<br>
	<form id="companyregisterform">
	  <fieldset>
	    <legend>Please fill out basic information</legend>
	    <div class="form-group">
	      <label for="exampleInputEmail1">Admin email address*</label>
	      <input ng-model="cemail" name = "cemail" class="form-control" id="cemail" aria-describedby="emailHelp" placeholder="Enter email" type="email">
	      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
	    </div>
	    <div class="form-group">
	      <label for="exampleInputPassword1">Password*</label>
	      <input ng-model="cpassword" name = "cpassword" class="form-control" id="cpassword" placeholder="Password" type="password">
	    </div>
	    
	   	<div class="form-group">
	      <label>Company Name*</label>
	      <input id="cname" ng-model="cname" name = "cname" class="form-control"  type="text">
	    </div>
	    
	   	<div class="form-group">
	      <label>HQ City*</label>
	      <input id="chqcity" ng-model="chqcity" name = "chqcity" class="form-control"  type="text">
	    </div>
	    
	    <div class="form-group">
	      <label for="exampleSelect1">HQ state*</label>
	      <select ng-model="chqstate" name = "chqstate" class="form-control" id="chqstate">
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
	      <label for="exampleSelect1">Industry*</label>
	      <select ng-model="cindustry" name = "cindustry" class="form-control" id="cindustry">
			<option>Accounting</option>
            <option>Airlines/Aviation</option>
            <option>Alternative Dispute Resolution</option>
            <option>Alternative Medicine</option>
            <option>Animation</option>
            <option>Apparel/Fashion</option>
            <option>Architecture/Planning</option>
            <option>Arts/Crafts</option>
            <option>Automotive</option>
            <option>Aviation/Aerospace</option>
            <option>Banking/Mortgage</option>
            <option>Biotechnology/Greentech</option>
            <option>Broadcast Media</option>
            <option>Building Materials</option>
            <option>Business Supplies/Equipment</option>
            <option>Capital Markets/Hedge Fund/Private Equity</option>
            <option>Chemicals</option>
            <option>Civic/Social Organization</option>
            <option>Civil Engineering</option>
            <option>Commercial Real Estate</option>
            <option>Computer Games</option>
            <option>Computer Hardware</option>
            <option>Computer Networking</option>
            <option>Computer Software</option>
            <option>Computer/Network Security</option>
            <option>Construction</option>
            <option>Consumer Electronics</option>
            <option>Consumer Goods</option>
            <option>Consumer Services</option>
            <option>Cosmetics</option>
            <option>Dairy</option>
            <option>Defense/Space</option>
            <option>Design</option>
            <option>E-Learning</option>
            <option>Education Management</option>
            <option>Electrical/Electronic Manufacturing</option>
            <option>Entertainment/Movie Production</option>
            <option>Environmental Services</option>
            <option>Events Services</option>
            <option>Executive Office</option>
            <option>Facilities Services</option>
            <option>Farming</option>
            <option>Financial Services</option>
            <option>Fine Art</option>
            <option>Fishery</option>
            <option>Food Production</option>
            <option>Food/Beverages</option>
            <option>Fundraising</option>
            <option>Furniture</option>
            <option>Gambling/Casinos</option>
            <option>Glass/Ceramics/Concrete</option>
            <option>Government Administration</option>
            <option>Government Relations</option>
            <option>Graphic Design/Web Design</option>
            <option>Health/Fitness</option>
            <option>Higher Education/Acadamia</option>
            <option>Hospital/Health Care</option>
            <option>Hospitality</option>
            <option>Human Resources/HR</option>
            <option>Import/Export</option>
            <option>Individual/Family Services</option>
            <option>Industrial Automation</option>
            <option>Information Services</option>
            <option>Information Technology/IT</option>
            <option>Insurance</option>
            <option>International Affairs</option>
            <option>International Trade/Development</option>
            <option>Internet</option>
            <option>Investment Banking/Venture</option>
            <option>Investment Management/Hedge Fund/Private Equity</option>
            <option>Judiciary</option>
            <option>Law Enforcement</option>
            <option>Law Practice/Law Firms</option>
            <option>Legal Services</option>
            <option>Legislative Office</option>
            <option>Leisure/Travel</option>
            <option>Library</option>
            <option>Logistics/Procurement</option>
            <option>Luxury Goods/Jewelry</option>
            <option>Machinery</option>
            <option>Management Consulting</option>
            <option>Maritime</option>
            <option>Market Research</option>
            <option>Marketing/Advertising/Sales</option>
            <option>Mechanical or Industrial Engineering</option>
            <option>Media Production</option>
            <option>Medical Equipment</option>
            <option>Medical Practice</option>
            <option>Mental Health Care</option>
            <option>Military Industry</option>
            <option>Mining/Metals</option>
            <option>Motion Pictures/Film</option>
            <option>Museums/Institutions</option>
            <option>Music</option>
            <option>Nanotechnology</option>
            <option>Newspapers/Journalism</option>
            <option>Non-Profit/Volunteering</option>
            <option>Oil/Energy/Solar/Greentech</option>
            <option>Online Publishing</option>
            <option>Other Industry</option>
            <option>Outsourcing/Offshoring</option>
            <option>Package/Freight Delivery</option>
            <option>Packaging/Containers</option>
            <option>Paper/Forest Products</option>
            <option>Performing Arts</option>
            <option>Pharmaceuticals</option>
            <option>Philanthropy</option>
            <option>Photography</option>
            <option>Plastics</option>
            <option>Political Organization</option>
            <option>Primary/Secondary Education</option>
            <option>Printing</option>
            <option>Professional Training</option>
            <option>Program Development</option>
            <option>Public Relations/PR</option>
            <option>Public Safety</option>
            <option>Publishing Industry</option>
            <option>Railroad Manufacture</option>
            <option>Ranching</option>
            <option>Real Estate/Mortgage</option>
            <option>Recreational Facilities/Services</option>
            <option>Religious Institutions</option>
            <option>Renewables/Environment</option>
            <option>Research Industry</option>
            <option>Restaurants</option>
            <option>Retail Industry</option>
            <option>Security/Investigations</option>
            <option>Semiconductors</option>
            <option>Shipbuilding</option>
            <option>Sporting Goods</option>
            <option>Sports</option>
            <option>Staffing/Recruiting</option>
            <option>Supermarkets</option>
            <option>Telecommunications</option>
            <option>Textiles</option>
            <option>Think Tanks</option>
            <option>Tobacco</option>
            <option>Translation/Localization</option>
            <option>Transportation</option>
            <option>Utilities</option>
            <option>Venture Capital/VC</option>
            <option>Veterinary</option>
            <option>Warehousing</option>
            <option>Wholesale</option>
            <option>Wine/Spirits</option>
            <option>Wireless</option>
            <option>Writing/Editing</option>
	      </select>
	    </div>
	    
	    
		<div class="form-group">
	      <label for="exampleTextarea">Introduction</label>
	      <textarea "ng-model="cintro"  name = "cintro" class="form-control" id="cintro" rows="3"></textarea>
	    </div>

	    
	    <div class="form-group">
	      <label for="exampleInputFile">Company logo</label>
	      <input class="form-control-file" id="cimage" ng-model="cimage" name = "cimage" aria-describedby="fileHelp" type="file">
	      <small id="fileHelp" class="form-text text-muted">Recommended size 200*200</small>
	    </div>	   

	    <button type="submit" id="companyregistersubmit" class="btn btn-primary">Submit</button>
	    
	    <font id="infomsg" color="red"></font>
	    
	    <br>
	    <br>
		
	  </fieldset>
	</form>
	

</div>
<br>