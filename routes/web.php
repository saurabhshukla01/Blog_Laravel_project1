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


//how to load controller under function in page in web.php file
Route::get('title/{title}','examplecontroller@index');
Route::get('url','examplecontroller@title');

//how to load view page in web.php file
Route::get('about/', function () {
    return view('about');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('blog/', function () {
    return view('blog');
});
//how to load one html page to another page using blade in laravel using inheritence method ..
Route::get('viewblog/', function () {
    return view('blog_list');
});

//featch Upload image in yours database and public folder uploaded successfully in yours Laravel project this url hits ..
Route::get('blogform/', function () {
    return view('blogform');
});
Route::post('get_blog/','Blog_url@blog_submit');

//how featch to using  Eloquent  method of function (route model and controller combination to going this url data)
Route::get('blog_url/','Blog_url@Blog_list');

//how to redirect one page to another page
Route::redirect('welcome','blog');

//submit data one page to another using methods
Route::get('form/','examplecontroller@form_data');
Route::post('get_form/','examplecontroller@get_data');

//set middleware
Route::get('seat/','Bus@Seat')->middleware('seatmiddleware');

//find the login page and session
Route::get('login/','Users@login');
Route::post('login_check/','Users@login_check');

//find the DB all value in Array form all curd operation url
Route::get('users_list','Users@users_list');

// create a pagination url in laravel project using database value
Route::get('page/','Userblog@index');
