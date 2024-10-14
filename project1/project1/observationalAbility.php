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


    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5"></h1>
                <br/>
                <br/>
            </div>
    </div>
            <div class="col-lg-12">
                <form method="post" action="" class="customRadio">
                    <table align="center">
                        <tr>
                            <td>
                                <h3> 1.	Which question figure are matches the answer figure? <br /><img src="img/observability/1/q.png" class="img-rounded" alt="Cinque Terre" /> </h3>
                            </td>
			
                        </tr>
                   
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="1" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/1/1.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="2" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/1/2.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>

                                        
                                       <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="3" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/1/3.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans" id="ans" class="form-check-input" value="4" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/1/4.png" class="img-rounded" alt="Cinque Terre" /> 
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


                    <table align="center">
                        <tr>
                            <td>
                                <h3> 2. Find out the mirror image of question diagram from answer diagram ? <br /><img src="img/observability/2/q.png" class="img-rounded" alt="Cinque Terre" /> </h3>
                            </td>
			
                        </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans2" id="ans2" class="form-check-input" value="1" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/2/1.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans2" id="ans2" class="form-check-input" value="2" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/2/2.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>

                                        
                                       <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans2" id="ans2" class="form-check-input" value="3" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/2/3.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans2" id="ans2" class="form-check-input" value="4" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/2/4.png" class="img-rounded" alt="Cinque Terre" /> 
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


                    <table align="center">
                        <tr>
                            <td>
                                <h3> 3.	The following question diagram is an incomplete diagram. Choose on of the given option. The incomplete figure will be completed correct ? <br /><img src="img/observability/3/q.png" class="img-rounded" alt="Cinque Terre" /> </h3>
                            </td>
			
                        </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans3" id="ans3" class="form-check-input" value="1" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/3/1.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans3" id="ans3" class="form-check-input" value="2" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/3/2.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>

                                        
                                       <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans3" id="ans3" class="form-check-input" value="3" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/3/3.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans3" id="ans3" class="form-check-input" value="4" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/3/4.png" class="img-rounded" alt="Cinque Terre" /> 
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

                    <table align="center">
                        <tr>
                            <td>
                                <h3> 4.	Find the part of the question diagram hidden in the given answer diagram ? <br /><img src="img/observability/4/q.png" class="img-rounded" alt="Cinque Terre" /> </h3>
                            </td>
			
                        </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans4" id="ans4" class="form-check-input" value="1" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/4/1.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans4" id="ans4" class="form-check-input" value="2" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/4/2.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>

                                        
                                       <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans4" id="ans4" class="form-check-input" value="3" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/4/3.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans4" id="ans4" class="form-check-input" value="4" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/4/4.png" class="img-rounded" alt="Cinque Terre" /> 
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

            
                    
                    <table align="center">
                        <tr>
                            <td>
                                <h3> 5. Find out the exact matching part in the figure below ? <br /><img src="img/observability/5/q.png" class="img-rounded" alt="Cinque Terre" /> </h3>
                            </td>
			
                        </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans5" id="ans5" class="form-check-input" value="1" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/5/1.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans5" id="ans5" class="form-check-input" value="2" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/5/2.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>

                                        
                                       <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans4" id="ans4" class="form-check-input" value="3" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/5/3.png" class="img-rounded" alt="Cinque Terre" /> 
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans4" id="ans4" class="form-check-input" value="4" />
                                            <!--<label class="form-check-label" for="<?php echo $result['ans']; ?>"><?php echo $result['ans']; ?></label>-->
                                            <img src="img/observability/5/4.png" class="img-rounded" alt="Cinque Terre" /> 
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

                    <table align="center">
                        <tr>
                            <td>
                                <h3> 6.	How many Dolphins are there in picture? <br /><img src="img/observability/6/q.png" class="img-rounded" alt="Cinque Terre" /> </h3>
                            </td>
			
                        </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans6" id="ans6" class="form-check-input" value="1" />
                                            <label class="form-check-label">9</label>
                                            
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans6" id="ans6" class="form-check-input" value="2" />
                                            <label class="form-check-label">11</label>
                                            
                                        </div>

                                        
                                       <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans6" id="ans6" class="form-check-input" value="3" />
                                            <label class="form-check-label">14</label>
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans6" id="ans6" class="form-check-input" value="4" />
                                            <label class="form-check-label">17</label>
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

                    <table align="center">
                        <tr>
                            <td>
                                <h3> 7.	The maximum number of difference in the figure are? <br /><img src="img/observability/7/1.png" class="img-rounded" alt="Cinque Terre" />
                                <img src="img/observability/7/2.png" class="img-rounded" alt="Cinque Terre" />
                            </h3>
                            </td>
			
                        </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans7" id="ans7" class="form-check-input" value="1" />
                                            <label class="form-check-label">2</label>
                                            
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans7" id="ans7" class="form-check-input" value="2" />
                                            <label class="form-check-label">3</label>
                                            
                                        </div>

                                        
                                       <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans7" id="ans7" class="form-check-input" value="3" />
                                            <label class="form-check-label">4</label>
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans7" id="ans7" class="form-check-input" value="4" />
                                            <label class="form-check-label">5</label>
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

                    <table align="center">
                        <tr>
                            <td>
                                <h3> 8.	The maximum number of difference in the figure are? <br /><img src="img/observability/8/q.png" class="img-rounded" alt="Cinque Terre" />
                                
                            </h3>
                            </td>
			
                        </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans8" id="ans8" class="form-check-input" value="1" />
                                            <label class="form-check-label">2</label>
                                            
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans8" id="ans8" class="form-check-input" value="2" />
                                            <label class="form-check-label">3</label>
                                            
                                        </div>

                                        
                                       <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans8" id="ans8" class="form-check-input" value="3" />
                                            <label class="form-check-label">4</label>
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans8" id="ans8" class="form-check-input" value="4" />
                                            <label class="form-check-label">5</label>
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

               

                    <table align="center">
                        <tr>
                            <td>
                                <h3> 9.	Count the number of camel in the picture ? <br /><img src="img/observability/9/q.png" class="img-rounded" alt="Cinque Terre" />
                                
                            </h3>
                            </td>
			
                        </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans9" id="ans9" class="form-check-input" value="1" />
                                            <label class="form-check-label">8</label>
                                            
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans9" id="ans9" class="form-check-input" value="2" />
                                            <label class="form-check-label">11</label>
                                            
                                        </div>

                                        
                                       <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans9" id="ans9" class="form-check-input" value="3" />
                                            <label class="form-check-label">10</label>
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans9" id="ans9" class="form-check-input" value="4" />
                                            <label class="form-check-label">13</label>
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

                    <table align="center">
                        <tr>
                            <td>
                                <h3> 10. Find the Number of fonts used in the statement ? <br /><img src="img/observability/10/q.png" class="img-rounded" alt="Cinque Terre" />
                                
                            </h3>
                            </td>
			
                        </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans10" id="ans10" class="form-check-input" value="1" />
                                            <label class="form-check-label">6</label>
                                            
                                        </div>
                                   
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans10" id="ans10" class="form-check-input" value="2" />
                                            <label class="form-check-label">7</label>
                                            
                                        </div>

                                        
                                       <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans10" id="ans10" class="form-check-input" value="3" />
                                            <label class="form-check-label">8</label>
                                        </div>
                                    
                                        <div class="form-check">
                                            <input type="radio" required title="Please select this option" name="ans10" id="ans10" class="form-check-input" value="4" />
                                            <label class="form-check-label">9</label>
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