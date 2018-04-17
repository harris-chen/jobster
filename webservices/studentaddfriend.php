<?php 
    require_once('connect.php');
    session_start();
    $from = $_SESSION['userid'];
    $to = $_POST['semail'];
    
    $query = "INSERT INTO friendrequests VALUES(?,?,'waiting',NOW())";
    $stmt = mysqli_prepare($dbc,$query);
    mysqli_stmt_bind_param($stmt,"ss", $from, $to);
    mysqli_stmt_execute($stmt);
?>