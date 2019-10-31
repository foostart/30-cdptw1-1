<?php
	$url_host = 'http://'.$_SERVER['HTTP_HOST'];
	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

	preg_match_all($pattern_uri, __DIR__, $matches);
	$url_path = $url_host . $matches[1][0];
	$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1314">
            <div class="container" >
            	<div class="row">
                  <form action="#" method="post">
            		<div class="full">
            		 <div class="col-md-6 col-sm-6 col-xs-6">
            		 	<div class="text-fi">

            		 		<input  placeholder="Name">
            		 	</div>
            		 	<div class="text-fi">
            		 		<input  placeholder="Email">

            		 	</div>
            		 	<div class="text-fi">
            		 		<input placeholder="Phone">

            		 	</div>
            		 	<div class="text-fi">
            		 		<textarea rows="5" cols="50" placeholder="Special note, concerns, of requirements "></textarea>
            		 	</div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6">
                     	<div class="text-fi">
            		 		<h5>what is the best way to reach you?</h5>
            		 	</div>
            		 	
            		 		<div class="right" id="toggle">
                                          <div class="PhoneEmail" style="color: #94d64f;">
            		 			

                                           <input class="checkradio" type="radio" value="contact" id="checkradio1" name="ckeckrdo">
                                          <label class="123" for="checkradio1">Phone</label><br>

                                         <input class="checkradio" type="radio" value="contact" id="checkradio" name="ckeckrdo">
                                          <label class="123" for="checkradio">Email</label>



							</div>
</div>
            		 	
            		 	<div class="text-fi">
            		 		<h5>Day of the week you are available for appointment :</h5>

            		 	</div>

            		 	<div class="text-fi">
            		 		<div class="right">
            		 			<div class="row" >
            		 				



                                                      <input type="checkbox" id="cbox2">
                                                      <label class="dayofweek" for="cbox2">Monday</label>
                                                      
            		 				
            		 				
            		 			</div>
            		 			<div class="row" >
            		 				
            		 					<input type="checkbox" id="cbox3">
                                                      <label class="dayofweek" for="cbox3">Tuesday</label>

            		 				
            		 			</div>
            		 			<div class="row" >
            		 				
            		 					<input type="checkbox" id="cbox4">
                                                      <label class="dayofweek" for="cbox4">Webnesday</label>

            		 				
            		 			</div>
            		 			<div class="row" >
            		 				
            		 					<input type="checkbox" id="cbox5">
                                                      <label class="dayofweek" for="cbox5">Thursday</label>

            		 				
            		 			</div>
            		 			<div class="row" >
            		 				
            		 					<input type="checkbox" id="cbox6">
                                                      <label class="dayofweek" for="cbox6">Friday</label>

            		 				
            		 			</div>


							</div>
						</div>


            		 	<div class="text-fi">
            		 		<h5>Best time of day for your appointment</h5>
            		 	</div>
            		 	<div class="text-fi">
            		 		<div class="right">
            		 		<div class="row" >
            		 				<div class="col-md-1 col-sm-1 col-xs-1">

            		 				</div>
            		 				
            		 					<input type="checkbox" id="cbox7">
                                                      <label class="dayofweek2" for="cbox7">Morning</label>

            		 				
            		 			</div>
            		 			<div class="row" >
            		 				
            		 					<input type="checkbox" id="cbox8">
                                                      <label class="dayofweek" for="cbox8">Afternoon</label>

            		 				
            		 			</div>
							</div>

            		 	</div>

                     </div>

                     <div class="clear">
                     </div>

                     <div class="v-full">
                     
                        <div class="row borderTopSolid">
                              <button type="submit" class="nut"  >
                     		       Request My Appointment
                              </button>
                        </div>
                        </form>
                     </div>
                 </div>
            </div>
</div>
    </div>
