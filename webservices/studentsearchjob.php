<?php 
    require_once('connect.php');
    session_start();
    $cname = $_POST['cname'];
    $jtitle = $_POST['jtitle'];
    $jcity = $_POST['jcity'];
    if($_POST['jsalary'] == ''){
        $jsalary = 0;
    }else{
        $jsalary = $_POST['jsalary'];
    }
    $jdescription = $_POST['jdescription'];
    if($_POST['jstate'] == "? undefined:undefined ?"){
        $jstate = "";
    }else{
        $jstate = $_POST['jstate'];
    }
    $jsalary = $_POST['jsalary'];
    if($_POST['jmajor'] == "? undefined:undefined ?"){
        $jmajor = "";
    }else{
        $jmajor = $_POST['jmajor'];
    }
    if($_POST['jdegree'] == "? undefined:undefined ?"){
        $jdegree = "";
    }else{
        $jdegree = $_POST['jdegree'];
    }
    
    $query = "select * from job natural join company where cname like '%".$cname."%' and jtitle like '%".$jtitle."%' and jcity like '%".$jcity."%' and jstate like '%".$jstate."%' and jsalary >= '".$jsalary."' and jdegree like '%".$jdegree."%' and jmajor like '%".$jmajor."%' and jdescription like '%".$jdescription."%' and jstatus='open' order by jdate desc";
    $response = @mysqli_query($dbc, $query);
    if($response){
        while($row = mysqli_fetch_array($response)){
            $cname = $row['cname'];
            $jid = $row['jid'];
            $jtitle = $row['jtitle'];
            $jcity = ucfirst($row['jcity']);
            $jstate = $row['jstate'];
            $jdate = $row['jdate'];
            $result[] = array('jid'=>$jid,'jtitle'=>$jtitle, 'jcity'=>$jcity, 'jstate'=>$jstate, 'jdate'=>$jdate, 'cname'=>$cname);
        }
        $json = array('status'=>1, 'info'=>$result);
    }else{
        $json = array('status'=>0, 'msg'=>'Error');
    }
    @mysqli_close();
    header('Content-type: application/json');
    echo json_encode($json);
?>