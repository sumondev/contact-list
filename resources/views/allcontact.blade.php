@extends('layout');
@section('content')
<!-- start section -->
			<h2> Allcontact</h2>	
				<div class="box span6">
						<div class="box-header">
							<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Striped Table</h2>
								<div class="box-icon">
									<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
									<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
									<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
								</div>
						</div>
            <!-- deleted message show start -->

         
            <p class="alert-sucess" style="font-size:20px;color: blue; background:#00ff00;">

                    <?php
                 
            	 	$message=Session::get('message');
            	 	if ($message) {

            	 		echo $message;
            	 		Session::put('message',null);
            	 	}

            	 	?>


            	</p>
        
                <!-- deleted message show end -->


					<div class="box-content">
						<table class="table table-striped">
							  <thead>
								  <tr>
									  <th>Contact Id</th>
									  <th>Contact Name</th>
									  <th>Contact Number</th>
									  <th>Action</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
							  	<!-- retrive database here -->
							  	@foreach($all_contact_info as $v_contact) 
							 <!--  all_contact_info is the function of admincontroler that reperesnt View ontact -->

									<tr> 

										<td> {{$v_contact->id}} </td>
										<td class="center">{{$v_contact->contact_name}}</td>
										<td class="center">{{$v_contact->contact_number}}</td>
										<td class="center">
											<!-- <a href="" class="btn btn-info"> Edit </a> -->
											<a href="{{URL::to('/edit_contact/'.$v_contact->id)}}" class="btn btn-info" > Edit  </a>
	                                        <a href="{{URL::to('/delete_contact/'.$v_contact->id)}}" class="btn btn-danger" id="delete"> Delete </a>
										</td>                                       
									</tr>

									@endforeach
								                        
							  </tbody>
						 </table>  
								 <div class="pagination pagination-centered">
								  <ul>
									<li><a href="#">Prev</a></li>
									<li class="active">
									  <a href="#">1</a>
									</li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">Next</a></li>
								  </ul>
								</div>     
					 </div>
				</div>





<!-- end section -->

@endsection