<?php 
    require_once('connect.php');
    $jid = $_POST['jid'];
    $query = "delete from job where jid =".$jid."";
    $response = @mysqli_query($dbc, $query);
?>