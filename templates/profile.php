<div class="horizontalDIV" ng-controller="profileCtrl">
	
    <div class="left">
    <img ng-src="data:image/JPEG;base64,{{profile.info[0].simage}}">
    </div>
    
    
    
    
    <div class="right">
        <br>
        <br>
        <legend>{{profile.info[0].sfname}} {{profile.info[0].slname}}</legend>
    	<legend>{{profile.info[0].suniversity}}</legend>
    	<legend>{{profile.info[0].sdegree}}, {{profile.info[0].smajor}}</legend>
    	<hr class="my-4">
    	<p>{{profile.info[0].sintro}}</p>
    	<br>
    	<form>
    	<button type="submit" ng-click="addfriend($index)" class="btn btn-primary">Download Resume</button>
    	<font id="infomsg" color="red"></font>
    	</form>
    </div>
</div>






<style type="text/css">
    div.horizontalDIV {
        margin: 15px;   
    }
    div.left {
        float: left;
        padding: 50px;    
    }
    div.right {
        float: left;
        padding: 10px;  
        max-width: 750px; 
    }
</style>