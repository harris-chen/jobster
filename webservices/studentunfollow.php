<?php 
    session_start();
    require_once('connect.php');
    $cid = $_POST['cid'];
    $query = "delete from follow where semail='".$_SESSION['userid']."' and cid=".$cid."";
    $response = @mysqli_query($dbc, $query);
?>