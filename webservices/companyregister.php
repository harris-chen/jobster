<?php
    require_once('connect.php');
    $cemail = $_POST['cemail'];
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
    
    
    $query = "select cemail from company";
    $response = @mysqli_query($dbc, $query);
    $a = array();
    if($response){
        while($row = mysqli_fetch_array($response)){
            $a[] = $row['cemail'];
        }
    }
    if(in_array($_POST['cemail'], $a, false)){
        echo "Failed";
    }else{
        $query = "INSERT INTO company VALUES('',?,?,?,?,?,?,?,'" . $cimage . "')";
        $stmt = mysqli_prepare($dbc,$query);
        mysqli_stmt_bind_param($stmt,"sssssss",$cname,$chqcity,$cindustry,$cintro,$chqstate,$cemail,$cpassword);
        mysqli_stmt_execute($stmt);
        echo "Success";
        session_start();
        $_SESSION['companyid'] = $cemail;
        $_SESSION['company'] = ucfirst($cname);
        unset($_SESSION["userid"]);
        unset($_SESSION["user"]);
    }
?>
