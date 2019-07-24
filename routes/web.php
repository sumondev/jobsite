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

/*route for admin_login_dashboard*/
Route::get ('/adminlogin','AdminController@admin_login'); 




