<?php 
    require_once('connect.php');
    session_start();
    $query = "select * from follow natural join company where semail = '".$_SESSION['userid']."' order by cname";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $cname = $row['cname'];
            $chqstate = $row['cHQstate'];
            $chqcity = ucfirst($row['cHQcity']);
            $cindustry = $row['cindustry'];
            $cid = $row['cid'];
            $result[] = array('cname'=>$cname,'chqstate'=>$chqstate, 'chqcity'=>$chqcity, 'cindustry'=>$cindustry, 'cid'=>$cid);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>