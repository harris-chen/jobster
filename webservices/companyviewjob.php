<?php 
    require_once('connect.php');
    $jid = $_POST['jid'];
    $query = "select * from job natural join company where jid=".$jid."";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $cname = $row['cname'];
            $jstatus = $row['jstatus'];
            $jid = $row['jid'];
            $jtitle = $row['jtitle'];
            $jcity = ucfirst($row['jcity']);
            $jstate = $row['jstate'];
            $jdate = $row['jdate'];
            $jdescription = $row['jdescription'];
            $jdegree =$row['jdegree'];
            $jmajor = $row['jmajor'];
            $jsalary = $row['jsalary'];
            $jdate = $row['jdate'];
            $result[] = array('jid'=>$jid,'jtitle'=>$jtitle, 'jcity'=>$jcity, 'jstate'=>$jstate, 'jdate'=>$jdate, 'jdescription'=>$jdescription, 'jdegree'=>$jdegree, 'jmajor'=>$jmajor, 'jsalary'=>$jsalary, 'jdate'=>$jdate, 'cname'=>$cname, 'jstatus'=>$jstatus);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>