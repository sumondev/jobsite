<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Redirect;

use Session;
Session_start(); 

class Admin_Dash_Board_Controller extends Controller
{

/*to show admin profile information*/

	     public function admin_view_profile(){

        // return view('admin.admin_profile');




      $admin_id=Session::get('admin_id');
      
      $admin_profile_view=DB::table('admin_tbl')
                   ->select('*')
                   ->where('admin_id',$admin_id)
                   ->first();


   

     // var_dump($admin_profile_view);

                // echo "</pre>";
                // print_r ($admin_profile_view);
                //     echo "</pre>";


          $manage_admin=view('admin.admin_profile')
              ->with('admin_description_profile',$admin_profile_view); 
        //admin_description_profile is uded for  admin profile view main representator in view page
          return view('admin.admin_layout')
            ->with('admin_profile',$manage_admin);
     
    }



    public function  admin_job_post(){

        return view('admin.admin_jobpost');
    }


  
    public function  admin_view_post(){

        return view('admin.admin_view_application');
    }

   

    public function  admin_submitted_post(){

        return view('admin.admin_jobpost_list');
    }
    


}
