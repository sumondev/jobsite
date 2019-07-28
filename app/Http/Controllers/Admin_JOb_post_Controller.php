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



    public function delete_job_submit($job_id){


    

      DB::table('admin_job_post_tbl')->where('job_id',$job_id)->delete();

      Session::put('message','Delete job_post Successfully!!');

      return Redirect::to('/admin_submitted_job_list');
    }










/* admin submitted ppost show method*/


    public function  admin_submitted_post(){

        // return view('admin.admin_jobpost_list');


 


        $post_info= DB::table('admin_job_post_tbl')->get();


        // var_dump($post_info);


          $manage_post=view('admin.admin_jobpost_list')->with('job_post_info',$post_info);  
        
           return view('admin.admin_layout')->with('admin_jobpost_list',$manage_post);
              /*job_post_info is uded for job post list main representator in admin_jobpost_list page*/




      
    }






}
