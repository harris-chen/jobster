<?php 
    session_start();
    require_once('connect.php');
    $jid = $_POST['jid'];
    $query = "INSERT INTO apply VALUES('".$_SESSION['userid']."',?,NOW())";
    $stmt = mysqli_prepare($dbc,$query);
    mysqli_stmt_bind_param($stmt,"i",$jid);
    mysqli_stmt_execute($stmt);
?>