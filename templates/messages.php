<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#network">Search</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#friends">My Friends</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#requests">Friend Requests</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab">Messages</a>
  </li>
</ul>

<div class="horizontalDIV" ng-controller="messagesCtrl">
	<div class="left">
	<h5 align="center">Messgae your friend</h5>
	<table class="table table-hover">
	<tbody>
    	<tr ng-repeat="r in friends.info">
    	<td style="width: 250px;" align="center";"><a href="#chatroom/{{r.semail}}">{{r.sfname}} {{r.slname}}</a></td>
    	</tr>
	</tbody>
	</table>
	</div>
	
	<div class="right">
	<h5 align="center">Conversation History</h5>
	</div>
</div>


<style type="text/css">
    div.horizontalDIV {
        margin: 15px;   
    }
    div.left {
        float: left;
        padding: 50px;
        border-right:1px solid gray;
        height:80vh;
    }
    div.right {
        float: left;
        padding: 50px;  
    }
</style>