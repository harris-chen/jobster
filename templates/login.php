<div ng-controller="loginCtrl">
	<div class="jumbotron">
	<h3>Please enter your email and password </h3>
	<br>
		<form id="loginform">
		  <fieldset>
		    <div class="form-group">
		      <label for="exampleInputEmail1">Email address</label>
		      <input ng-model="semail" name = "semail" class="form-control" id="semail" aria-describedby="emailHelp" placeholder="Enter email" type="email">
		    </div>
		    
		  <div class="form-group">
	      	<label for="exampleInputPassword1">Password</label>
	      	<input ng-model="spassword" name = "spassword" class="form-control" id="spassword" placeholder="Password 6-30 Characters" type="password">
	      </div>
	      
	      <br>
	      <button type="submit" id="submit" class="btn btn-primary">Log in</button>
	      <font id="infomsg" color="red"></font>
	      
		  </fieldset>
	    </form>
	</div>
</div>