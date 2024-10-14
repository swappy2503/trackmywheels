<?php
//include ('../inc/header.php');
//include_once ('../lib/Session.php');
include_once ('../lib/Database.php');
//$uname=Session::get("userName");

if(isset($_POST['submit'])){
     
     $db = new Database();
     $uname = mysqli_real_escape_string($db->link,$_POST['uname']);
     $quesNo=mysqli_real_escape_string($db->link,$_POST['quesNo']);
     $option=mysqli_real_escape_string($db->link,$_POST['ans']);
     date_default_timezone_set('Asia/Kolkata');
     $dateYmd = date('Y-m-d');
     $corrAns = array(1,2,3,4,4,3,2,1,1,2,9,1);
     $nextPage=array('data1.php','data2.php','data3.php','data4.php','data5.php','data6.php','data7.php','data8.php','data9.php','data10.php','na1.php');



     if(strlen($uname)>5){
     $query = "INSERT INTO tbl_dataability(userName, quesNo,ans,dteTime, correct ) VALUES('$uname','$quesNo','$option','$dateYmd','$corrAns[$quesNo]')";
     $insert_row = $db->insert($query);

     if ($insert_row) {
echo "success";
$page='Location:'.'../'.$nextPage[$quesNo];
echo $page;
header($page);
exit();
     }

     }else{
          //uname null. return    
     }
  
}
?>
