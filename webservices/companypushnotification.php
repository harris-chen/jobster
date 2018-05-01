<?php 
    session_start();
    require_once('connect.php');
    $jid = $_POST['jid'];
    if($_POST['suniversity'] == "? undefined:undefined ?"){
        $suniv = "";
    }else{
        $suniv = $_POST['suniversity'];
    }
    if($_POST['sdegree'] == "? undefined:undefined ?"){
        $sdegree = "";
    }else{
        $sdegree = $_POST['sdegree'];
    }
    if($_POST['smajor'] == "? undefined:undefined ?"){
        $smajor = "";
    }else{
        $smajor = $_POST['smajor'];
    }
    if($_POST['sgpa'] == ""){
        $sgpa = 0;
    }else{
        $sgpa = $_POST['sgpa'];
    }
    $sresume = $_POST['sresume'];
    
    
    $query = "insert into notification select semail, '".$jid."' from student where sgpa >= '".$sgpa."' and sresume like '%".$sresume."%' and sdegree like '%".$sdegree."%' and smajor like '%".$smajor."%' and suniversity like '%".$suniv."%'";
    $stmt = mysqli_prepare($dbc,$query);
    mysqli_stmt_bind_param($stmt,"i",$cid);
    mysqli_stmt_execute($stmt);
?>