<?php 
    require_once('connect.php');
    session_start();
    $query = "select cid from company where cname = '".$_SESSION['company']."'";
    $response = @mysqli_query($dbc, $query);
    $a = array();
    if($response){
        while($row = mysqli_fetch_array($response)){
            $a[] = $row['cid'];
        }
    }
    $cid = reset($a);
    
    
    $query = "select * from job where cid = ".$cid."";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $jid = $row['jid'];
            $jtitle = $row['jtitle'];
            $jcity = ucfirst($row['jcity']);
            $jstate = $row['jstate'];
            $jdate = $row['jdate'];
            $result[] = array('jid'=>$jid,'jtitle'=>$jtitle, 'jcity'=>$jcity, 'jstate'=>$jstate, 'jdate'=>$jdate);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>