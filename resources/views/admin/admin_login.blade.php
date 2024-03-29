<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Salt Admin</title>
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

<body class=""  style="background-color:#7C91EC">




  

  


  <div class="container">
    <div class="container-fluid page-body-wrapper">
      <div class="row" >

        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto" style="background-color:#7C91EC" >
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-4" align="content-wrapper">Admin Login</h3>

          
                    {{-- This part is used for view message Emain or password is not correct --}}
                  <p class="alert-sucess" style="font-size:20px;color:#13EE4C; background:#9A1232;">

                    <?php
                 
                $message=Session::get('message');
                if ($message) {

                  echo $message;
                  Session::put('message',null);
                }

                ?>


              </p>

                <form method="post" action="{{url('/adminlogin_dashboard') }}">  
             
               

                {{csrf_field()}}
                <div class="form-group">
                  <label>Username or email *</label>
                  <input type="email" class="form-control p_input" name="admin_email" placeholder=" student Email" required="">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" class="form-control p_input" name="admin_password" placeholder="student Password" required="">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="icheck-square">
                    {{-- <input tabindex="1" type="checkbox" id="remember">
                    <label for="remember">Remember me</label> --}}
                  </div>
                  <a href="#" class="forgot-pass">{{-- Forgot password --}}</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  {{-- Log in for submit  --}}
                </div>
                {{-- <div class="d-flex justify-content-center mb-4">
                  <a href="#" class="facebook-login btn btn-facebook mr-2">Facebook</a>
                  <a href="#" class="google-login btn btn-google">Google+</a>
                </div> --}}
                <small class="text-center d-block ">Don't have an Account?<a href="{{URL::TO('/admin_signup')}}"><h2 class="text-danger"> Sign Up </h2></a></small>
              </form>
            </div>
          </div>
        </div>
       
        <!-- content-wrapper ends -->
        

      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
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


