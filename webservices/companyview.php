<?php 
    require_once('connect.php');
    $query = "select * from company where cid = '" . $_POST['cid'] . "'";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $cemail = $row['cemail'];
            $cname = ucfirst($row['cname']);
            $chqstate = $row['cHQstate'];
            $chqcity = $row['cHQcity'];
            $cindustry = $row['cindustry'];
            $cintro = $row['cintro'];
            $cimage = $row['cimage'];
            $result[] = array('cemail'=>$cemail, 'cname'=>$cname, 'chqstate'=>$chqstate, 'chqcity'=>$chqcity, 'cindustry'=>$cindustry,'cintro'=>$cintro, 'cimage'=>$cimage);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>