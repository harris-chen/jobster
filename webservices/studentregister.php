<?php
    require_once('connect.php');
    $semail = $_POST['semail'];
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
    $srestriction = $_POST['srestriction'];
    
    $query = "select semail from student";
    $response = @mysqli_query($dbc, $query);
    $a = array();
    if($response){
        while($row = mysqli_fetch_array($response)){
            $a[] = $row['semail'];
        }
    }
    if(in_array($_POST['semail'], $a, false)){
        echo "Failed";
    }else{
        $query = "INSERT INTO student VALUES(?,?,?,?,?,?,?,?,?,?, '" . $simage . "', ?)";
        $stmt = mysqli_prepare($dbc,$query);
        mysqli_stmt_bind_param($stmt,"sssssssdsss", $semail, $spassword, $sfname, $slname, $suniversity, $sdegree, $smajor, $sgpa, $sintro, $sresume, $srestriction);
        mysqli_stmt_execute($stmt);
        echo "Success";
        session_start();
        $_SESSION['userid'] = $semail;
        $_SESSION['user'] = ucfirst($sfname);
        unset($_SESSION["companyid"]);
        unset($_SESSION["company"]);
    }
?>