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
    $sresume = addslashes($_FILES['sresume']['tmp_name']);
    $sresume = file_get_contents($sresume);
    
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
        $query = "INSERT INTO student VALUES(?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($dbc,$query);
        mysqli_stmt_bind_param($stmt,"sssssssdss", $semail, $spassword, $sfname, $slname, $suniversity, $sdegree, $smajor, $sgpa, $sintro, $sresume);
        mysqli_stmt_execute($stmt);
        echo "Success";
        session_start();
        $_SESSION['userid'] = $semail;
        $_SESSION['user'] = ucfirst($sfname);
    }
?>