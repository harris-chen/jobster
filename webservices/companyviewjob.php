<?php 
    require_once('connect.php');
    $jid = $_POST['jid'];
    $query = "select * from job where jid=".$jid."";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $jid = $row['jid'];
            $jtitle = $row['jtitle'];
            $jcity = ucfirst($row['jcity']);
            $jstate = $row['jstate'];
            $jdate = $row['jdate'];
            $jdescription = $row['jdescription'];
            $jdegree =$row['jdegree'];
            $jmajor = $row['jmajor'];
            $jsalary = $row['jsalary'];
            $result[] = array('jid'=>$jid,'jtitle'=>$jtitle, 'jcity'=>$jcity, 'jstate'=>$jstate, 'jdate'=>$jdate, 'jdescription'=>$jdescription, 'jdegree'=>$jdegree, 'jmajor'=>$jmajor, 'jsalary'=>$jsalary);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>