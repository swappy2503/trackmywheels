<?php 

$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php');
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');

class Process{
	private $db;
	private $fm;

	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
  public function insertAttemptedQuestions($data){
    $selectAns=$data['ans'];
    $quesnumber =$data['quesnumber'];
    $email=$_SESSION['userName'];
    //create table tbl_answers1(id int not null auto_increment, email varchar(32) not null, questionNo int not null, ans text not null, primary key(id, email));
    //create table tbl_answers1(email varchar(32) not null, questionNo int not null, ans text not null, primary key(email, questionNo));
    $query = "INSERT INTO tbl_answers1(email,questionNo, ans) VALUES('$email','$quesnumber', '$selectAns')";
    $insertr = $this->db->insert($query);
    if ($insertr) {
//       echo "<div class=\"alert alert-success alert-dismissible fade show\">Registration Successful. Please login.</div>";
 //      exit();
    }else{
             echo "<div class=\"alert alert-success alert-dismissible fade show\">Something went wrong. Please login.</div>";
    exit();
    }
    return $insertr;
   }
   public function getProcessData($data){
     $selectAns  = $this->fm->validation($data['ans']);
     $quesnumber = $this->fm->validation($data['quesnumber']);
     $selectAns  = mysqli_real_escape_string($this->db->link, $selectAns);
     $quesnumber = mysqli_real_escape_string($this->db->link, $quesnumber);
     $val=$this->insertAttemptedQuestions($data);
     $next = $quesnumber+1;

     if (!isset($_SESSION['score'])) {
     	 $_SESSION['score'] = '0';
     }

     $total = $this->getTotal();
     //$right = $this->rightAns($quesnumber);
     //if ($right == $selectAns) {
     	//$_SESSION['score']++;
     //}
     if ($quesnumber == $total) {
     	//header("Location:final.php");
		header("Location:c1.php");
     	exit();
     }else{
     	header("Location:test.php?q=".$next);
     }
   }
   

   
   private function getTotal(){
   	$query = "SELECT * FROM tbl_ques";
   	$result = $this->db->select($query);
   	$resultData = $result->num_rows;
   	return $resultData;
   }
   private function rightAns($quesnumber){
   	$query = "SELECT * FROM tbl_ans WHERE quesNo = '$quesnumber' AND rightAns = '1'";
   	$result = $this->db->select($query)->fetch_assoc();
   	$rightar = $result['id'];
   	return $rightar;

   }
}
?>