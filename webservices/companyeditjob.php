<?php 
    session_start();
    require_once('connect.php');
    $jid = $_POST['jid'];
    $jtitle = $_POST['jtitle'];
    $jcity = $_POST['jcity'];
    if($_POST['jstate'] == "? undefined:undefined ?"){
        $jstate = "";
    }else{
        $jstate = $_POST['jstate'];
    }
    if($_POST['jsalary']==""){
        $jsalary =0;
    }else{
        $jsalary = $_POST['jsalary'];
    }
    if($_POST['jmajor'] == "? undefined:undefined ?"){
        $jmajor = "";
    }else{
        $jmajor = $_POST['jmajor'];
    }
    if($_POST['jdegree'] == "? undefined:undefined ?"){
        $jdegree = "";
    }else{
        $jdegree = $_POST['jdegree'];
    }
    $jdescription = $_POST['jdescription'];
    $jstatus = $_POST['jstatus'];
    
   
    
    $query = "update job set jtitle='".$jtitle."', jcity='".$jcity."', jstate='".$jstate."', jsalary=".$jsalary.", jmajor='".$jmajor."', jdegree='".$jdegree."',jdescription='".$jdescription."', jdate=NOW(), jstatus='".$jstatus."' where jid=".$jid."";
    $response = @mysqli_query($dbc, $query);
 ?>