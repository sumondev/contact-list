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

   /*page route here*/

Route::get('/addcontact','AdminController@add_contact');

Route::get('/dashboard','AdminController@dashboard');

Route::get('/allcontact','AdminController@all_contact');

/*post method*/
Route::post ('/save_contact','AdminController@save_contact');

/*delet method*/
Route::get ('/delete_contact/{id}','AdminController@delete_contact');
/*'/delet_contact/{id} here id used for admin controller delet operation with this id */


/*edit method*/
Route::get ('/edit_contact/{id}','AdminController@edit_contact');


/*post method for update*/
Route::post ('/contact_update/{id}','AdminController@contact_update'); 