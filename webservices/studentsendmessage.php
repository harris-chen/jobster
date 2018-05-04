<?php 
    session_start();
    require_once('connect.php');
    $semail = $_POST['semail'];
    $message = $_POST['message'];
    $query = "INSERT INTO chatroom VALUES('".$_SESSION['userid']."',?,NOW(),?)";
    $stmt = mysqli_prepare($dbc,$query);
    mysqli_stmt_bind_param($stmt,"ss", $semail, $message);
    mysqli_stmt_execute($stmt);
?>