<?php
    session_start();
    require_once('connect.php');
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
    
    $query = "select cid from company where cname = '".$_SESSION['company']."'";
    $response = @mysqli_query($dbc, $query);
    $a = array();
    if($response){
        while($row = mysqli_fetch_array($response)){
            $a[] = $row['cid'];
        }
    }
    $cid = reset($a);
    
    
    $query = "INSERT INTO job VALUES('',".$cid.",?,?,?,?,?,?,?,NOW(),'open')";
    $stmt = mysqli_prepare($dbc,$query);
    mysqli_stmt_bind_param($stmt,"sssssss",$jcity,$jstate,$jtitle,$jsalary,$jdegree,$jmajor,$jdescription);
    mysqli_stmt_execute($stmt);
?>
