<?php 
    session_start();
    require_once('connect.php');
    if($_POST['university'] == "? undefined:undefined ?"){
        $univ = "";
    }else{
        $univ = $_POST['university'];
    }
    if($_POST['major'] == "? undefined:undefined ?"){
        $major = "";
    }else{
        $major = $_POST['major'];
    }
    $query = "select * from student where semail <> '". $_SESSION['userid'] . "' and (sfname like '%" . $_POST['name'] . "%' or slname like '%" . $_POST['name'] . "%') and suniversity like '%" . $univ . "%' and smajor like '%" . $major . "%' order by suniversity, sfname, slname ";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $semail = $row['semail'];
            $sfname = ucfirst($row['sfname']);
            $slname = ucfirst($row['slname']);
            $suniversity = $row['suniversity'];
            $sdegree = $row['sdegree'];
            $smajor = $row['smajor'];
            $result[] = array('semail'=>$semail, 'sfname'=>$sfname, 'slname'=>$slname, 'suniversity'=>$suniversity, 'sdegree'=>$sdegree, 'smajor'=>$smajor);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>