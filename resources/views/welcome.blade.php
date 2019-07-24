<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('admin/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('admin/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/style1.css')}}">


</head>
<body>


<div>
  <br>
  
</div>


<div class="container">
  <p class="h1" align="center"> Welcome to Jobsite</p>
  <div class="row">
    <div class="col">

      <a href="{{URL::TO('/adminlogin')}}">
     <button class="btn success"> Admin section </button>
   </a>
    </div>
    <div class="col">
     <button class="btn info"> Applicant section </button>
    </div>
  </div>

  





</body>
</html>