<?php
//include ('../inc/header.php');
//include_once ('../lib/Session.php');
include_once ('../lib/Database.php');
//$uname=Session::get("userName");
// alter table tbl_spatialability drop id;
// ALTER TABLE tbl_spatialability ADD id INT UNSIGNED NOT NULL AUTO_INCREMENT, ADD INDEX (id);
// ALTER TABLE `db_exam`.`tbl_spatialability`  CHANGE COLUMN `id` `id` INT UNSIGNED NOT NULL AUTO_INCREMENT FIRST;
if(isset($_POST['submit'])){
     
     $db = new Database();
     $uname = mysqli_real_escape_string($db->link,$_POST['uname']);
     $quesNo=mysqli_real_escape_string($db->link,$_POST['quesNo']);
     $option=mysqli_real_escape_string($db->link,$_POST['ans']);
     date_default_timezone_set('Asia/Kolkata');
     $dateYmd = date('Y-m-d');
     $corrAns = array(1,2,3,4,4,3,2,1,1,2,2);
     $nextPage=array('sp1.php','sp2.php','sp3.php','sp4.php','sp5.php','sp6.php','sp7.php','sp8.php','sp9.php','sp10.php');



     if(strlen($uname)>5){
          
     $query = "INSERT INTO tbl_spatialability(userName, quesNo,ans,dteTime, correct ) VALUES('$uname','$quesNo','$option','$dateYmd','$corrAns[$quesNo]')";
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
