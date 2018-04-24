<?php 
    require_once('connect.php');
    $query = "select * from student where semail = 'hao.chen@nyu.edu'";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $sresume = $row['sresume'];
        }
        header('Content-Disposition: attachment; filename = ' .$sresume . '');
        header('Content-type: application/octent-strem');
        header('Content-length='.filesize($sresume));
        readfile($sresume);
    }
?>