<?php 
    session_start();
    require_once('connect.php');
    $query = "select * from student where semail = '".$_POST['semail']."'";
    echo $_POST['semail'];
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $sresume = $row['sresume'];
        }
        header('Content-length='.filesize($sresume));
        header('Content-type: application/octent-strem');
        header("Content-Disposition: attachment; filename=$sresume");
        ob_clean();
        flush();
        echo $sresume;
    }
?>