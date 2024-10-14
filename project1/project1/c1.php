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
    
</style>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">COMPREHENSION PASSAGES</h1>
                <br/>
                <br/>
            </div>
    </div>
            <div class="col-lg-12">
                <form method="post" action="db/cData.php" class="customRadio">
                    <table align="center">
                        <tr>
                            <td>
                                <h4> Read the following passage carefully and answer the questions given at the end : <br /> Swachch Bharat Abhiyan</h4>
                                <p>The Prime Minister Narendra Modi has initiated a renaissance of Swachch Bharat for the last two three years and the desired results have started coming up. The All India Radio, Television channels and even Bollywood have taken this campaign as a big challenge. The messages from media advise people not to defecate in the open. People have had been compelled to go out for toilet in rains and winters during day time. They, thus, were compelled to defecate at the road side or railway. tracks. Railway passengers have had to turn their faces the other side when they found people sitting in the open and defecating. What a bad impression it created on tourists and NRIs and foreigners watching them sitting on another railway-track with water-bottle! Lakes of toilets have been constructed and are being used now.. Patrolling Groups have been formed in villages to check that people do not go out with water-bottle or water-container  and they do not defecate in the open. The Government of India and State Governments have been sanctioning financial grants to various agencies, cities and village- panchayats to construct public toilets so that this old need and habit of people, especially in villages, towns and colonies is checked and corrected. Toilet - a movie released recently depicts the problems of women-folk as how they are compelled to go for toilet before the sun rise or after the sun set. The old people and the sick persons, especially ladies, have had been suffering from this dilemma as they feel scary of going out in the open for toilet during day.</p>
                            </td>
            
			
                        </tr>
                        <tr><td><h3>1. Which campaign has been started by the Prime Minister Narendra Modi?</h3></td></tr>
                   
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="1" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <label class="form-check-label">Construction of Toilets</label>
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="2" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <label class="form-check-label">Checking that people do not go outside for toilet</label>
                                        </div>

                                        
                                       <div class="form-check">
                                        <input type="hidden" name="uname" value="<?php echo $uname; ?>"/>
                                        <input type="hidden" name="quesNo" value="1" />
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="3" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <label class="form-check-label">Swachch Bharat campaign</label>
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="4" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <label class="form-check-label">Making more movies like Toilet.</label>
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