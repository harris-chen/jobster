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
    $jsalary = $_POST['jsalary'];
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
    
   
    
    $query = "update job set jtitle='".$jtitle."', jcity='".$jcity."', jstate='".$jstate."', jsalary=".$jsalary.", jmajor='".$jmajor."', jdegree='".$jdegree."',jdescription='".$jdescription."', jdate=NOW() where jid=5";
    $response = @mysqli_query($dbc, $query);
 ?>