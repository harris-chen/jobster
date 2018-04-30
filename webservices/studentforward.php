<?php 
    session_start();
    require_once('connect.php');
    $jid = $_POST['jid'];
    $to = $_POST['semail'];
    $fintro = $_POST['fintro'];
    $query = "INSERT INTO forward VALUES('".$_SESSION['userid']."',?,?,?)";
    $stmt = mysqli_prepare($dbc,$query);
    mysqli_stmt_bind_param($stmt,"sis",$to,$jid,$fintro);
    mysqli_stmt_execute($stmt);
?>