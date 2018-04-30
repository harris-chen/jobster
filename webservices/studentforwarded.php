<?php 
    require_once('connect.php');
    session_start();
    $query = "select * from (forward natural join job natural join company),student where forward.to = '".$_SESSION['userid']."' and semail = forward.from";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $sfname = ucfirst($row['sfname']);
            $slname = ucfirst($row['slname']);
            $cname = $row['cname'];
            $jid = $row['jid'];
            $jtitle = $row['jtitle'];
            $jcity = ucfirst($row['jcity']);
            $jstate = $row['jstate'];
            $jdate = $row['jdate'];
            $fintro = $row['fintro'];
            $result[] = array('jid'=>$jid,'jtitle'=>$jtitle, 'jcity'=>$jcity, 'jstate'=>$jstate, 'jdate'=>$jdate, 'cname'=>$cname, 'fintro'=>$fintro, 'sfname'=>$sfname, 'slname'=>$slname);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>