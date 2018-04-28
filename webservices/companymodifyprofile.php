<?php
    session_start();
    require_once('connect.php');
    $cemail = $_SESSION['companyid'];
    $cpassword = $_POST['cpassword'];
    $cname = $_POST['cname'];
    $chqstate = $_POST['chqstate'];
    $chqcity = $_POST['chqcity'];
    $cindustry = $_POST['cindustry'];
    $cintro = $_POST['cintro'];
    if(isset($_FILES['cimage'])){
        $cimage = addslashes($_FILES['cimage']['tmp_name']);
        $cimage = file_get_contents($cimage);
        $cimage = base64_encode($cimage);
    }else{
        $cimage = '';
    }
    $query = "update company set cpassword='".$cpassword."', cname='".$cname."', cHQstate='".$chqstate."', cHQcity='".$chqcity."', cintro='".$cintro."', cindustry='".$cindustry."', cimage='".$cimage."' where cemail='".$cemail."'";
    $response = @mysqli_query($dbc, $query);
    
    $_SESSION['companyid'] = $cemail;
    $_SESSION['company'] = ucfirst($cname);
    
?>