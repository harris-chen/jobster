<?php 
    require_once('connect.php');
    session_start();
    $query = "select * from student where semail = '" . $_POST['semail'] . "'";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $semail = $row['semail'];
            $sfname = ucfirst($row['sfname']);
            $slname = ucfirst($row['slname']);
            $suniversity = $row['suniversity'];
            $sdegree = $row['sdegree'];
            $smajor = $row['smajor'];
            $sintro = $row['sintro'];
            $simage = $row['simage'];
            $result[] = array('semail'=>$semail, 'sfname'=>$sfname, 'slname'=>$slname, 'suniversity'=>$suniversity, 'sdegree'=>$sdegree, 'smajor'=>$smajor, 'sintro'=>$sintro, 'simage'=>$simage);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>