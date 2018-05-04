<?php 
    require_once('connect.php');
    session_start();
    
    $query = "select * from student where semail = '".$_POST['semail']."' and srestriction='false'";
    $response = @mysqli_query($dbc, $query);
    $a = array();
    if($response){
        while($row = mysqli_fetch_array($response)){
            $a[] = $row['semail'];
        }
    }
    
    //// NO RESTRICTION
    if(in_array($_POST['semail'], $a, false)){
        $query = "select * from student where semail = '" . $_POST['semail'] . "'";
        $response = @mysqli_query($dbc, $query);
        if($response){
            while($row = mysqli_fetch_array($response)){
                $semail = $row['semail'];
                $sfname = ucfirst($row['sfname']);
                $slname = ucfirst($row['slname']);
                $suniversity = $row['suniversity'];
                $sdegree = $row['sdegree'];
                $smajor = $row['smajor'];
                $sintro = $row['sintro'];
                $simage = $row['simage'];
                $sgpa = $row['sgpa'];
                $result[] = array('semail'=>$semail, 'sfname'=>$sfname, 'slname'=>$slname, 'suniversity'=>$suniversity, 'sdegree'=>$sdegree, 'smajor'=>$smajor, 'sintro'=>$sintro, 'simage'=>$simage, 'sgpa'=>$sgpa);
            }
            $json = array('status'=>1, 'info'=>$result);
        }else{
            $json = array('status'=>0, 'msg'=>'Error');
        }
        @mysqli_close();
        header('Content-type: application/json');
        echo json_encode($json);
    }else{ ///// RESTRICTION
        //// I AM student, check friend only
        if(isset($_SESSION['user'])){
            $query = "select distinct * from student natural join ((select semail1 as semail from friendrequests where semail2 = '" . $_SESSION['userid'] . "' and status = 'approved') union all (select semail2 as semail from friendrequests where semail1 = '" . $_SESSION['userid'] . "' and status = 'approved')) as A";
            $response = @mysqli_query($dbc, $query);
            $a = array();
            if($response){
                while($row = mysqli_fetch_array($response)){
                    $a[] = $row['semail'];
                }
            }
            //// IS FRIEND
            if(in_array($_POST['semail'], $a, false)){
                $query = "select * from student where semail = '" . $_POST['semail'] . "'";
                $response = @mysqli_query($dbc, $query);
                if($response){
                    while($row = mysqli_fetch_array($response)){
                        $semail = $row['semail'];
                        $sfname = ucfirst($row['sfname']);
                        $slname = ucfirst($row['slname']);
                        $suniversity = $row['suniversity'];
                        $sdegree = $row['sdegree'];
                        $smajor = $row['smajor'];
                        $sintro = $row['sintro'];
                        $simage = $row['simage'];
                        $sgpa = $row['sgpa'];
                        $result[] = array('semail'=>$semail, 'sfname'=>$sfname, 'slname'=>$slname, 'suniversity'=>$suniversity, 'sdegree'=>$sdegree, 'smajor'=>$smajor, 'sintro'=>$sintro, 'simage'=>$simage, 'sgpa'=>$sgpa);
                    }
                    $json = array('status'=>1, 'info'=>$result);
                }else{
                    $json = array('status'=>0, 'msg'=>'Error');
                }
                @mysqli_close();
                header('Content-type: application/json');
                echo json_encode($json);
            }else{
                $query = "select * from student where semail = '" . $_POST['semail'] . "'";
                $response = @mysqli_query($dbc, $query);
                if($response){
                    while($row = mysqli_fetch_array($response)){
                        $semail = $row['semail'];
                        $sfname = ucfirst($row['sfname']);
                        $slname = ucfirst($row['slname']);
                        $suniversity = $row['suniversity'];
                        $sdegree = $row['sdegree'];
                        $smajor = $row['smajor'];
                        $sintro = $row['sintro'];
                        $simage = $row['simage'];
                        $result[] = array('semail'=>$semail, 'sfname'=>$sfname, 'slname'=>$slname, 'suniversity'=>$suniversity, 'sdegree'=>$sdegree, 'smajor'=>$smajor, 'sintro'=>$sintro, 'simage'=>$simage);
                    }
                    $json = array('status'=>1, 'info'=>$result);
                }else{
                    $json = array('status'=>0, 'msg'=>'Error');
                }
                @mysqli_close();
                header('Content-type: application/json');
                echo json_encode($json);
            }
        }else if(isset($_SESSION['company'])){
            $query = "select distinct semail from apply natural join job natural join company where cname = '".$_SESSION['company']."'";
            $response = @mysqli_query($dbc, $query);
            $a = array();
            if($response){
                while($row = mysqli_fetch_array($response)){
                    $a[] = $row['semail'];
                }
            }
            if(in_array($_POST['semail'], $a, false)){
                $query = "select * from student where semail = '" . $_POST['semail'] . "'";
                $response = @mysqli_query($dbc, $query);
                if($response){
                    while($row = mysqli_fetch_array($response)){
                        $semail = $row['semail'];
                        $sfname = ucfirst($row['sfname']);
                        $slname = ucfirst($row['slname']);
                        $suniversity = $row['suniversity'];
                        $sdegree = $row['sdegree'];
                        $smajor = $row['smajor'];
                        $sintro = $row['sintro'];
                        $simage = $row['simage'];
                        $sgpa = $row['sgpa'];
                        $result[] = array('semail'=>$semail, 'sfname'=>$sfname, 'slname'=>$slname, 'suniversity'=>$suniversity, 'sdegree'=>$sdegree, 'smajor'=>$smajor, 'sintro'=>$sintro, 'simage'=>$simage, 'sgpa'=>$sgpa);
                    }
                    $json = array('status'=>1, 'info'=>$result);
                }else{
                    $json = array('status'=>0, 'msg'=>'Error');
                }
                @mysqli_close();
                header('Content-type: application/json');
                echo json_encode($json);
            }else{
                $query = "select * from student where semail = '" . $_POST['semail'] . "'";
                $response = @mysqli_query($dbc, $query);
                if($response){
                    while($row = mysqli_fetch_array($response)){
                        $semail = $row['semail'];
                        $sfname = ucfirst($row['sfname']);
                        $slname = ucfirst($row['slname']);
                        $suniversity = $row['suniversity'];
                        $sdegree = $row['sdegree'];
                        $smajor = $row['smajor'];
                        $sintro = $row['sintro'];
                        $simage = $row['simage'];
                        $result[] = array('semail'=>$semail, 'sfname'=>$sfname, 'slname'=>$slname, 'suniversity'=>$suniversity, 'sdegree'=>$sdegree, 'smajor'=>$smajor, 'sintro'=>$sintro, 'simage'=>$simage);
                    }
                    $json = array('status'=>1, 'info'=>$result);
                }else{
                    $json = array('status'=>0, 'msg'=>'Error');
                }
                @mysqli_close();
                header('Content-type: application/json');
                echo json_encode($json);
            }
        }else{
            $query = "select * from student where semail = '" . $_POST['semail'] . "'";
            $response = @mysqli_query($dbc, $query);
            if($response){
                while($row = mysqli_fetch_array($response)){
                    $semail = $row['semail'];
                    $sfname = ucfirst($row['sfname']);
                    $slname = ucfirst($row['slname']);
                    $suniversity = $row['suniversity'];
                    $sdegree = $row['sdegree'];
                    $smajor = $row['smajor'];
                    $sintro = $row['sintro'];
                    $simage = $row['simage'];
                    $result[] = array('semail'=>$semail, 'sfname'=>$sfname, 'slname'=>$slname, 'suniversity'=>$suniversity, 'sdegree'=>$sdegree, 'smajor'=>$smajor, 'sintro'=>$sintro, 'simage'=>$simage);
                }
                $json = array('status'=>1, 'info'=>$result);
            }else{
                $json = array('status'=>0, 'msg'=>'Error');
            }
            @mysqli_close();
            header('Content-type: application/json');
            echo json_encode($json);
        }
    }
?>