{{-- @extends('admin.admin_layout') --}}
@section('content')

  <div class="container-fluid">
          <div class="row user-profile">
            <div class="col-lg-8 side-left">
            
              <div class="card mb-6">
                <div class="card-body overview">
                  {{-- <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul> --}}
                  {{-- <div class="wrapper about-user"> --}}
                  	<div class="container-fluid">
                   {{--  <h2 class="card-title mt-4 mb-3">About</h2> --}}

                    <div class="p-3 mb-2 bg-dark text-white" align="center"><h1>*********** Admin profile Information ************</h1></div>



                   
                  </div>
                 
                  </div>


{{-- table start --}}

				<div class="container-fluid">
					
					   <tbody>
									
                  <table id="" class="table table-striped" style="width:100%;">
                 {{--    <thead> --}}
                      <tr>
                         
                          <th>First Name</th>
                          		
                          	    <td>{{$admin_description_profile->admin_first_name}}</td>
                       </tr>

                       <tr>
                       	

                           <th>Last Name </th>
                               <td>{{$admin_description_profile->admin_last_name}}</td> 
                       </tr>

                 <tr>

                 	<th>Business Name:</th>
                 	<td>{{$admin_description_profile->admin_business_name}}</td>
                 	


                 </tr>

                 <th>Email </th>
                  <td>{{$admin_description_profile->admin_email}}</td>
               



                 </tr>

             



                    
                    


               {{--      </thead> --}}
                 
                 
                     
                    </tbody>
      
                  </table>

            </div>


{{-- table end --}}


                </div>
              </div>
            </div>
           
          </div>
        </div>
    


@endsection