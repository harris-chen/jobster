<?php 
    require_once('connect.php');
    session_start();
    $query = "select * from student natural join ((select semail1 as semail from friendrequests where semail2 = '" . $_SESSION['userid'] . "' and status = 'approved') union all (select semail2 as semail from friendrequests where semail1 = '" . $_SESSION['userid'] . "' and status = 'approved')) as A";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $semail = $row['semail'];
            $sfname = ucfirst($row['sfname']);
            $slname = ucfirst($row['slname']);
            $suniversity = $row['suniversity'];
            $sdegree = $row['sdegree'];
            $smajor = $row['smajor'];
            $result[] = array('semail'=>$semail, 'sfname'=>$sfname, 'slname'=>$slname, 'suniversity'=>$suniversity, 'sdegree'=>$sdegree, 'smajor'=>$smajr);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>