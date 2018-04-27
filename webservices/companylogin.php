<?php 
    require_once('connect.php');
    $cemail = $_POST['cemail'];
    $cpassword = $_POST['cpassword'];

    $query = "select cemail from company";
    $response = @mysqli_query($dbc, $query);
    $a = array();
    if($response){
        while($row = mysqli_fetch_array($response)){
            $a[] = $row['cemail'];
        }
    }
    if(!in_array($_POST['cemail'], $a, false)){
        echo "Not exist";
    }else{
        $query = "select cpassword from company where cemail='" . $cemail . "'";
        $response = @mysqli_query($dbc, $query);
        $a = array();
        
        if($response){
            while($row = mysqli_fetch_array($response)){
                $a[] = $row['cpassword'];
            }
        }
        if(!in_array($_POST['cpassword'], $a, false)){
            echo "Incorrect Password";
        }else{
            echo "Success";
            $query = "select cname from company where cemail='" . $cemail . "'";
            $response = @mysqli_query($dbc, $query);
            $name = array();
            if($response){
                while($row = mysqli_fetch_array($response)){
                    $name[] = $row['cname'];
                }
            }
            $cname = $name[0];
            session_start();
            $_SESSION['companyid'] = $cemail;
            $_SESSION['company'] = ucfirst($cname);
            unset($_SESSION["userid"]);
            unset($_SESSION["user"]);
        }
    }
?>