@extends('admin.admin_layout')
@section('content')

<div  class="container">


	  <div  class="row justify-content-md-center">
      <div class="col-8 col-lg-8 grid-margin ">

	
                  <div style="background-color: #694CB2 ; margin-left: 0px; margin-right: 0px;   lass="card "> 
                      <div  class="card-body ">
                          <h2 class="bg-primary"> <center> <b>Job Post Panel </b> </center></h2>

                          {{-- form subnit  --}}
                          <form  class="forms-sample" method="post" action="{{url('/save_job')}}" enctype="multipart/form-data" >
                          	
                       {{-- here enctype="multipart/formdata" is used form image or mutimedia data --}}
                                  {{csrf_field()}} {{-- token generation --}}

                          	
                              <div class="form-group">
                                  <label for="exampleInputPassword1"> Job Title</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="job_title" placeholder="title your job" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Job Description</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="job_description" placeholder="please describe your job " required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Salary</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="job_salary" placeholder="Provide salary range"required="">
                              </div>

                               <div class="form-group">
                                  <label for="exampleInputPassword1">Location</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="job_location" placeholder="Mention your company location " required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Country</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="job_country" placeholder="Mention your country name"required="">
                              </div>



                            
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
            </div>

</div>



@endsection