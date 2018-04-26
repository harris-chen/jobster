<?php
    session_start();
    require_once('connect.php');
    $semail = $_SESSION['userid'];
    $spassword = $_POST['spassword'];
    $sfname = $_POST['sfname'];
    $slname = $_POST['slname'];
    $suniversity = $_POST['suniversity'];
    $sdegree = $_POST['sdegree'];
    $smajor = $_POST['smajor'];
    $sgpa = $_POST['sgpa'];
    $sintro = $_POST['sintro'];
    if(isset($_FILES['sresume'])){
        $sresume = addslashes($_FILES['sresume']['tmp_name']);
        $sresume = file_get_contents($sresume);
    }else{
        $sresume = '';
    }
    if(isset($_FILES['simage'])){
        $simage = addslashes($_FILES['simage']['tmp_name']);
        $simage = file_get_contents($simage);
        $simage = base64_encode($simage);
    }else{
        $simage = '';
    }
    
    

    $query = "update student set spassword='".$spassword."', sfname='".$sfname."', slname='".$slname."', suniversity='".$suniversity."', sdegree='".$sdegree."', smajor='".$smajor."', sgpa='".$sgpa."', sintro='".$sintro."', sresume='".$sresume."', simage='".$simage."' where semail='".$semail."'";
    $response = @mysqli_query($dbc, $query);

    $_SESSION['userid'] = $semail;
    $_SESSION['user'] = ucfirst($sfname);
    
?>