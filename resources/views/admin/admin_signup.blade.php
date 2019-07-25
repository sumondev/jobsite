
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin_signup</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('admin/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin/images/favicon.html')}}" />
</head>
<!DOCTYPE html>  
<html>

<body class=""  style="background-color:#B6BFBD>



<div  class="container">


	  <div  class="row justify-content-md-center">

      <div class="col-md-8 col-lg-4">

	
                  <div style="background-color: #7C91EC ; margin-left: 0px; margin-right: 0px;   class="card "> 
                      <div  class="card-body ">
                          <h1 class="" style="background-color:#D8EB06"> <center> <b>  Admin regestration form </b> </center></h1>

                          {{-- form subnit  --}}
                          <form  class="forms-sample" method="post" action="{{url('/save_admin')}}" enctype="multipart/form-data" >
                          	
                       {{-- here enctype="multipart/formdata" is used form image or mutimedia data --}}
                                  {{csrf_field()}} {{-- token generation --}}

                          	
                              <div class="form-group">
                                  <label for="exampleInputPassword1">First Name</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="admin_first_name" placeholder="Input your first name" required="">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Last Name</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="admin_last_name" placeholder="Input your last name" required="">
                              </div>


                              

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Business Name</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1" name="admin_business_name" placeholder="Input business_name"required="">
                              </div>



                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control p-input bg-light text-black" id="exampleInputEmail1" aria-describedby="emailHelp"name="admin_email" placeholder="Enter your Email Number "required="">
                                  <small id="emailHelp" class="form-text ">We'll never share your email with anyone else.</small>
                              </div>


                            
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password </label>
                                  <input type="password" class="form-control" id="exampleInputPassword1"name="admin_password" placeholder="input your password"required="">
                                 <small>you don't share your password with any other</small>
                              </div>
    
                            
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
   </div>
</div>


 <!-- plugins:js -->
  <script src="{{asset('admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"> </script>
  <script src="{{asset('admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin/js/misc.js')}}"></script>
  <script src="{{asset('admin/js/settings.js')}}"></script>
  <!-- endinject -->
</body>


</html>
