@extends('layout');
@section('content')
<!-- start section -->

                

                       

						<form class="form-horizontal" method="post" action="{{url('/contact_update',$all_contact_info->id) }}">
							{{csrf_field()}}
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Contact Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="contact_name" value="{{$all_contact_info->contact_name}}">
								</div>
							  </div>
							  
							    <div class="control-group">
								 <label class="control-label" for="focusedInput">Contact  Number</label>
								 <div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="contact_number" value="{{$all_contact_info->contact_number}}" >
								</div>
							
						
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Update Contact</button>
								<button type="reset" class="btn btn-primary">Cancel</button>

								<!-- <button class="btn">Cancel</button> -->
							  </div>
							</fieldset>
						 </form>
					</div>

<!-- end section -->
@endsection