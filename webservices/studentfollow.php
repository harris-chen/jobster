<?php 
    session_start();
    require_once('connect.php');
    $cid = $_POST['cid'];
    $query = "INSERT INTO follow VALUES('".$_SESSION['userid']."',?)";
    $stmt = mysqli_prepare($dbc,$query);
    mysqli_stmt_bind_param($stmt,"i",$cid);
    mysqli_stmt_execute($stmt);
?>