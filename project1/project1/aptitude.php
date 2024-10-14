<?php include 'inc/header.php'; ?>
<style>
/* Using css var aka custom properies, don't use them if you don't use tools such as postCss */
:root {
      --color-blue: #5897fc;
      --color-blue-grayed: #e0ecff;
    }

#ans{
  border:2px solid white;
  box-shadow:0 0 0 1px #392;
  appearance:none;
  border-radius:50%;
  width:12px;
  height:12px;
  background-color:#fff;
  transition:all ease-in 0.2s;

}
#ans:checked{
  background-color:#392;
}
    
</style>
<?php
 Session::checkSession();
 if (isset($_GET['q'])) {
 	$quesnumber = (int) $_GET['q'];
 }else{
 	header("Location:exam.php");
 }
 $total    = $exam->getTotalRows();
 $question = $exam->getQuestionNumber($quesnumber);

?>
<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$process = $pro->getProcessData($_POST);
 }

 
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Question <?php echo $question['quesNo']." of ". $total; ?></h1>
                <br/>
                <br/>
            </div>
    </div>
            <div class="col-lg-12">
                <form method="post" action="" class="customRadio">
                    <table align="center">
                        <tr>
                            <td>
                                <h3> <?php echo $question['ques']; ?></h3>
                            </td>
			
                        </tr>
                        <?php
                        $answer = $exam->getAnswer($quesnumber);
                        if ($answer) {
                            while ($result = $answer->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                                <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="<?php echo $result['id']; ?>" />
                                                <label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>
                                        </div>

<!--                                        <input type="radio" name="ans" value="--><?php //echo $result['id']; ?><!--" />--><?php //echo $result['ans']; ?>
                                    </td>
									 
									 
									
                                </tr>
								
                            <?php } } ?>
                        <tr>
                            <td>
                                <br/>
                                <input type="submit" name="submit" class="btn btn-outline-primary" value="Next Question" />
                                <input type="hidden" name="quesnumber"
                                       value="<?php echo $quesnumber; ?>" />
                            </td>
                        </tr>
                    </table>
                </form>
                <br/>
                <br/>
            </div>
        </div>
    </div>

<?php include 'inc/footer.php'; ?>