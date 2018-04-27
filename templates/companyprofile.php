<?php 
session_start();
?>
<div class="horizontalDIV" ng-controller="companyprofileCtrl">
	
    <div class="left">
    <img ng-src="data:image/JPEG;base64,{{companyprofile.info[0].cimage}}">
    </div>
    
    
    
    
    <div class="right" id="companynoedit">
        <br>
        <br>
        <form>
        <legend>{{companyprofile.info[0].cname}} &nbsp;&nbsp;
        	    <button type="submit" ng-click="companyeditprofile()" class="btn btn-secondary">Edit</button></legend></form>
    	<legend>{{companyprofile.info[0].cindustry}}</legend>
    	<legend>{{companyprofile.info[0].chqcity}}, {{companyprofile.info[0].chqstate}}</legend>
    	<hr class="my-4">
    	<p>{{companyprofile.info[0].cintro}}</p>
    	<br>
    </div>

    <div class="right" id="companyedit">
        <br>
        <br>
		HIHI
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