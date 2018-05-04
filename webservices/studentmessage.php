<?php 
    session_start();
    require_once('connect.php');
    $to = $_POST['semail'];
    $query = "select * from chatroom, student where (semail1='".$_SESSION['userid']."' or semail2='".$_SESSION['userid']."') and (semail1='".$to."' or semail2='".$to."') and semail = semail1 order by cdate";
    
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $semail1 = $row['semail1'];
            $semail2 = $row['semail2'];
            $message = $row['message'];
            $sfname = $row['sfname'];
            $result[] = array('semail1'=>$semail1, 'semail2'=>$semail2, 'message'=>$message, 'sfname'=>$sfname);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>