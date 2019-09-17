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
            		 	<div class="text-fi">
            		 		<div class="right">
            		 			<div class="row">
            		 				<div class="col-md-1 col-sm-1 col-xs-1">
            		 					<input type="radio" value="" checked="checked" />

            		 				</div>
            		 				<div class="col-md-2 col-sm-2 col-xs-2">
            		 					<h6> Phone</h6>

            		 				</div>
            		 				<div class="col-md-9 col-sm-9 col-xs-9">


            		 				</div>
            		 			</div>
            		 			<div class="row">
            		 				<div class="col-md-1 col-sm-1 col-xs-1">
            		 					<input type="radio" value=""/>

            		 				</div>
            		 				<div class="col-md-2 col-sm-2 col-xs-2">
            		 					<h6> Email</h6>

            		 				</div>
            		 				<div class="col-md-9 col-sm-9 col-xs-9">


            		 				</div>
            		 			</div>


							</div>

            		 	</div>
            		 	<div class="text-fi">
            		 		<h5>Day of the week you are available for appointment :</h5>

            		 	</div>
            		 	<div class="text-fi">
            		 		<div class="right">
            		 			<div class="row" >
            		 				<div class="col-md-1 col-sm-1 col-xs-1">
            		 					<input type="checkbox" value=""/>

            		 				</div>



            		 				<div class="col-md-2 col-sm-2 col-xs-2">
            		 					<h6> Monday</h6>

            		 				</div>
            		 				<div class="col-md-9 col-sm-9 col-xs-9">


            		 				</div>
            		 			</div>
            		 			<div class="row" >
            		 				<div class="col-md-1 col-sm-1 col-xs-1">
            		 					<input type="checkbox" value=""/>

            		 				</div>



            		 				<div class="col-md-2 col-sm-2 col-xs-2">
            		 					<h6> Tuesday</h6>

            		 				</div>
            		 				<div class="col-md-9 col-sm-9 col-xs-9">


            		 				</div>
            		 			</div>
            		 			<div class="row" >
            		 				<div class="col-md-1 col-sm-1 col-xs-1">
            		 					<input type="checkbox" value=""  />

            		 				</div>



            		 				<div class="col-md-2 col-sm-2 col-xs-2">
            		 					<h6> Webnesday</h6>

            		 				</div>
            		 				<div class="col-md-9 col-sm-9 col-xs-9">


            		 				</div>
            		 			</div>
            		 			<div class="row" >
            		 				<div class="col-md-1 col-sm-1 col-xs-1">
            		 					<input type="checkbox" value=""/>

            		 				</div>



            		 				<div class="col-md-2 col-sm-2 col-xs-2">
            		 					<h6> Thursday</h6>

            		 				</div>
            		 				<div class="col-md-9 col-sm-9 col-xs-9">


            		 				</div>
            		 			</div>
            		 			<div class="row" >
            		 				<div class="col-md-1 col-sm-1 col-xs-1">
            		 					<input type="checkbox"  value=""  />

            		 				</div>



            		 				<div class="col-md-2 col-sm-2 col-xs-2">
            		 					<h6> Friday</h6>

            		 				</div>
            		 				<div class="col-md-9 col-sm-9 col-xs-9">


            		 				</div>
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
            		 					<input type="checkbox" value=""/>

            		 				</div>
            		 				<div class="col-md-9 col-sm-9 col-xs-9">


            		 				</div>



            		 				<div class="col-md-6 col-sm-6 col-xs-6">
            		 					<h6> Morning</h6>

            		 				</div>
            		 				<div class="col-md-9 col-sm-9 col-xs-9">


            		 				</div>
            		 			</div>
            		 			<div class="row" >
            		 				<div class="col-md-1 col-sm-1 col-xs-1">
            		 					<input type="checkbox"  value="" />

            		 				</div>



            		 				<div class="col-md-6 col-sm-6 col-xs-6">
            		 					<h6> Afternoon</h6>

            		 				</div>
            		 				<div class="col-md-9 col-sm-9 col-xs-9">


            		 				</div>
            		 			</div>
							</div>

            		 	</div>

                     </div>

                     <div class="clear">
                     </div>

                     <div class="v-full">
                     	<button type="button" class="nut"  >

                     			Request My Appointment

                     	</button>
                     </div>
                 </div>
            </div>
</div>
    </div>
