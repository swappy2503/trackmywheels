<?php
include 'inc/header.php';
//Session::init();

$uname= Session::get("userName");

?>

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

#quesImg{
    width:  70%;
    
    background-size: cover;
} 
</style>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            <h1 class="mt-5"> Numerical Ability</h1>
                <br/>
                <br/>
            </div>
    </div>
            <div class="col-lg-12">
                <form method="post" action="db/naData.php" class="customRadio">
                <table align="center">
                        <tr>
                            <td>
                            <h4>
                            2.	Choose the correct number in place of the question mark from the following ?
                            
                            <br /> <img src="img/numerical/2/q.png" class="img-rounded" alt="Cinque Terre" id="quesImg"/>

                            </h4>
                            </td>
			
                        </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="1" />
                                            <label class="form-check-label">52</label>
                                            
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="2" />
                                            <label class="form-check-label">54</label>
                                        </div>

                                       <div class="form-check">
                                            <input type="hidden" name="uname" value="<?php echo $uname; ?>"/>
                                            <input type="hidden" name="quesNo" value="2" />
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="3" />
                                            <label class="form-check-label">53</label>
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="4" />
                                            <label class="form-check-label">55</label>
                                        </div>
                                    </td>
                                </tr>
								

                        <tr>
                            <td>
                                <br/>
                                <input type="submit" name="submit" class="btn btn-outline-primary" value="Next Question" />
                            
                            </td>
                        </tr>
                    </table>

                  
                    
                </form>
                <br/>
                <br/>
            </div>
        </div>
    </div>
<!--    <script>
        $(document).ready(function() {
            $("#Always").click(function(){
				$("#aNo").attr('checked', false);              
				$("#aRarely").attr('checked', false);              
				$("#aUsually").attr('checked', false);              				
                $("#aAlways").attr('checked', true); 
				
            });
			$("#aAlways").click(function(){
				$("#No").attr('checked', false);              
				$("#Rarely").attr('checked', false);              
				$("#Usually").attr('checked', false);         
                $("#Always").attr('checked', true);              
            });
			
			$("#Usually").click(function(){
				$("#aNo").attr('checked', false);              
				$("#aRarely").attr('checked', false);              
                $("#aAlways").attr('checked', false); 
                $("#aUsually").attr('checked', true);              
            });
			$("#aUsually").click(function(){
				$("#No").attr('checked', false);              
				$("#Rarely").attr('checked', false);              
                $("#Always").attr('checked', false); 
                $("#Usually").attr('checked', true);              
            });
			
			
			$("#Rarely").click(function(){
				$("#aNo").attr('checked', false);            
				$("#aUsually").attr('checked', false);              				
                $("#aAlways").attr('checked', false); 
                $("#aRarely").attr('checked', true);              
            });
			$("#aRarely").click(function(){
				$("#No").attr('checked', false);            
				$("#Usually").attr('checked', false);              				
                $("#Always").attr('checked', false); 
                $("#Rarely").attr('checked', true);              
            });
			
			
			$("#No").click(function(){
				$("#aRarely").attr('checked', false);              
				$("#aUsually").attr('checked', false);              				
                $("#aAlways").attr('checked', false); 
                $("#aNo").attr('checked', true);              
            });
			$("#aNo").click(function(){
				$("#Rarely").attr('checked', false);              
				$("#Usually").attr('checked', false);              				
                $("#Always").attr('checked', false); 
                $("#No").attr('checked', true);              
            });

            
        });
    </script>
-->
<?php include 'inc/footer.php'; ?>