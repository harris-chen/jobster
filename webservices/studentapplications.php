<?php 
    session_start();
    require_once('connect.php');
    $query = "select * from apply natural join job natural join company where semail = '".$_SESSION['userid']."' order by adate desc";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $cname = $row['cname'];
            $adate = $row['adate'];
            $jid = $row['jid'];
            $jtitle = $row['jtitle'];
            $jcity = ucfirst($row['jcity']);
            $jstate = $row['jstate'];
            $jdate = $row['jdate'];
            $jstatus = $row['jstatus'];
            $result[] = array('jid'=>$jid,'jtitle'=>$jtitle, 'jcity'=>$jcity, 'jstate'=>$jstate, 'jdate'=>$jdate, 'cname'=>$cname, 'adate'=>$adate, 'jstatus'=>$jstatus);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);

?>