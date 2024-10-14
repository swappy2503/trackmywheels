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
     $corrAns = array(1,2,3,4,4,3,2,1,1,2,9);
     $nextPage=array('ra1.php','ra2.php','ra3.php','ra4.php','ra5.php','ra6.php','ra7.php','ra8.php','ra9.php','ra10.php','sp1.php');



     if(strlen($uname)>5){ 
     $query = "INSERT INTO tbl_rationalability(userName, quesNo,ans,dteTime, correct ) VALUES('$uname','$quesNo','$option','$dateYmd','$corrAns[$quesNo]')";
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
