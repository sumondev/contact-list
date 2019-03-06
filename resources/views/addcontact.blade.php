@extends('layout');
@section('content')
<!-- start section -->

                  <div class="box-content">

                  	<p class="alert-sucess" style="font-size:20px;color: blue; background:#00ff00; ">
                  		<?php
                  		 	$message=Session::get('message');
                  		 	if ($message) {

                  		 		echo $message;
                  		 		Session::put('message',null);
                  		 	}


                  		?>
                  		
                  	</p>



						<form class="form-horizontal" method="post" action="{{url('/save_contact') }}">
							{{csrf_field()}}
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Contact Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="contact_name" placeholder="Input Name" required="">
								</div>
							  </div>
							  
							    <div class="control-group">
								 <label class="control-label" for="focusedInput">Contact  Number</label>
								 <div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="contact_number" placeholder="Input Number" required="">
								</div>
							
						
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Add Contact</button>
								<button type="reset" class="btn btn-primary">Cancel</button>

								<!-- <button class="btn">Cancel</button> -->
							  </div>
							</fieldset>
						 </form>
					</div>

<!-- end section -->
@endsection