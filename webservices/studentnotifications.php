<?php 
    require_once('connect.php');
    session_start();
    $query = "select * from notification natural join job natural join company where semail='".$_SESSION['userid']."' order by jdate desc";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $cname = $row['cname'];
            $jid = $row['jid'];
            $jtitle = $row['jtitle'];
            $jcity = ucfirst($row['jcity']);
            $jstate = $row['jstate'];
            $jdate = $row['jdate'];
            $result[] = array('jid'=>$jid,'jtitle'=>$jtitle, 'jcity'=>$jcity, 'jstate'=>$jstate, 'jdate'=>$jdate, 'cname'=>$cname);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>