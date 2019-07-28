@extends('admin.admin_layout')
@section('content')






{{-- <div class="content-wrapper"> --}}
	 <div class="container" align="center">
         
          <div class="card">
          	 <h1 class="page-title" style="background-color: #8EB9FF ; margin-left: 0px; margin-right: 0px;"  align="center">Job post list</h1>
            <div class="card-body">


                  
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





              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                	
                		
                	


                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>job_title</th>
                          <th>job_description</th>
                          <th>job_salary</th>
                          <th>job_location</th>
                          <th>job_country</th>
                          <th>Action</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($job_post_info as $view_job_post)   
                      <tr>
                          
                          <td>{{$view_job_post->job_title}}</td> 
                          <td>{{$view_job_post->job_description}}</td>
                          <td>{{$view_job_post->job_salary}}</td>
                           <td>{{$view_job_post->job_location}}</td>
                          
                          <td>{{$view_job_post->job_country}}</td>

                          <td>  <a href="{{URL::to('/delete_submitted_job/'.$view_job_post->job_id)}}" class="btn btn-danger" id="delete"> Delete </a></td>
                        
                      </tr>
     
                  @endforeach  
                   </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
 </div>




@endsection