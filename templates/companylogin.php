<div ng-controller="companyloginCtrl">
	<div class="jumbotron">
	<h3>Please enter admin email and password </h3>
	<br>
		<form id="companyloginform">
		  <fieldset>
		    <div class="form-group">
		      <label for="exampleInputEmail1">Email address</label>
		      <input ng-model="cemail" name = "cemail" class="form-control" id="cemail" aria-describedby="emailHelp" placeholder="Enter email" type="email">
		    </div>
		    
		  <div class="form-group">
	      	<label for="exampleInputPassword1">Password</label>
	      	<input ng-model="cpassword" name = "cpassword" class="form-control" id="cpassword" placeholder="Password" type="password">
	      </div>
	      
	      <br>
	      <button type="submit" id="companylogin" class="btn btn-primary">Log in</button>
	      <font id="infomsg" color="red"></font>
	      
		  </fieldset>
	    </form>
	</div>
</div>