<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start(); 

class AdminsignupController extends Controller
{
    public function adminsignup() {
   	return view('admin.admin_signup');
}


/*admin sign up form submitted function*/
public function saveadmin(Request $request){


        $data=array();
         $data['admin_first_name']=$request->admin_first_name ;
          $data['admin_last_name']=$request->admin_last_name;
           $data['admin_business_name']=$request->admin_business_name;
            $data['admin_email']=$request->admin_email ;
             $data['admin_password']=$request->admin_password ;
              

               DB::table('admin_tbl')->insert($data);

               Session::put('message','Admin submitted sucessfully');

               return Redirect::to('/adminlogin'); 



         }

}
