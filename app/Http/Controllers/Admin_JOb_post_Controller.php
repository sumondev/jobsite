<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start(); 


class Admin_JOb_post_Controller extends Controller
{
    

    public function save_job(Request $request){



        $data=array();
         $data['job_title']=$request->job_title;
          $data['job_description']=$request->job_description;
           $data['job_salary']=$request->job_salary;
            $data['job_location']=$request->job_location;
             $data['job_country']=$request->job_country;
              

               DB::table('admin_job_post_tbl')->insert($data);

               Session::put('message','Job post created sucessfully');



                 return Redirect::to('/admin_jobpost'); 

               // return Redirect::to('/admin_submitted_job_list'); 




    }



}
