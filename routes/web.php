<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*...............admin panel............... */

/*admin login */

/*route for admin_login_form*/
Route::get ('/adminlogin','AdminloginController@admin_login'); 


/*log out route*/
Route::get ('/adminlogout','AdminloginController@admin_logout'); 


/*route for access admin_login_dashboard*/
Route::post ('/adminlogin_dashboard','AdminloginController@admin_login_dashbord'); 

/*admin dashboard*/
Route::get ('/admin_dashboard','AdminloginController@admindashboard'); 


/*Admin signup form creation page*/
Route::get ('/admin_signup','AdminsignupController@adminsignup'); 


/*add admin form submit*/
Route::post ('/save_admin','AdminsignupController@saveadmin'); 





/*To show admin profile in admin_dashboard*/

Route::get ('/admin_profile','Admin_Dash_Board_Controller@admin_view_profile'); 

/*to create admin job post in admin_dashboard*/

Route::get ('/admin_jobpost','Admin_Dash_Board_Controller@admin_job_post');

/*Admin_job post acess value */
Route::post('/save_job','Admin_JOb_post_Controller@save_job'); 



/*to show admin submitted job post*/

Route::get ('/admin_submitted_job_list','Admin_Dash_Board_Controller@admin_submitted_post');

/*view applicant submited list*/

Route::get ('/admin_view_application','Admin_Dash_Board_Controller@admin_view_post');








