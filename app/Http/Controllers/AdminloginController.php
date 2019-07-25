<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

use Session;
Session_start(); 

class AdminloginController extends Controller
{



	public function admin_login() {
   	return view('admin.admin_login');


}

/*admin login function to access admin_dashboard posting value*/ 

 
public function admin_login_dashbord(Request $request) {


  
     $email=$request->admin_email;
      $password=($request->admin_password);
      $result=DB::table('admin_tbl')
      ->where('admin_email',$email)
      ->where('admin_password',$password)
      ->first();

   // return view('admin.admin_dashboard');

      // var_dump($result);


   		// echo "</pre>";
   		// print_r($result);

   		// echo "</pre>";

   		if ($result) {

        Session::put('admin_email',$result->admin_email);
        Session::put('admin_id',$result->admin_id);
        Session::put('message','You are sucessfully login to your Admin dashboard');

   			return Redirect::to('/admin_dashboard'); 
   		}
   		else {
   			Session::put('message','Your Email or Password is not Correct, Agian Try !!');
   			/* This session is used for when email or password invalid and then show this message */
   			return Redirect::to('/adminlogin'); 
   		}


}

 /*to go to the admin_dashboard route functin*/

	public function admindashboard() {
   	return view('admin.admin_dashboard');

  }



      /* Admin log out function*/
        public function admin_logout(){

       
        Session::put('admin_first_name',null);
        Session::put('admin_last_name',null);

          Session::put('admin_id',null);

          return Redirect::to('/adminlogin'); 


       }

}

