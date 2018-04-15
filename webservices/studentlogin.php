<?php 
    require_once('connect.php');
    $semail = $_POST['semail'];
    $spassword = $_POST['spassword'];

    $query = "select semail from student";
    $response = @mysqli_query($dbc, $query);
    $a = array();
    if($response){
        while($row = mysqli_fetch_array($response)){
            $a[] = $row['semail'];
        }
    }
    if(!in_array($_POST['semail'], $a, false)){
        echo "Not exist";
    }else{
        $query = "select spassword from student where semail='" . $semail . "'";
        $response = @mysqli_query($dbc, $query);
        $a = array();
        
        if($response){
            while($row = mysqli_fetch_array($response)){
                $a[] = $row['spassword'];
            }
        }
        if(!in_array($_POST['spassword'], $a, false)){
            echo "Incorrect Password";
        }else{
            echo "Success";
            $query = "select sfname from student where semail='" . $semail . "'";
            $response = @mysqli_query($dbc, $query);
            $name = array();
            if($response){
                while($row = mysqli_fetch_array($response)){
                    $name[] = $row['sfname'];
                }
            }
            $sfname = $name[0];
            session_start();
            $_SESSION['userid'] = $semail;
            $_SESSION['user'] = ucfirst($sfname);
        }
    }
?>