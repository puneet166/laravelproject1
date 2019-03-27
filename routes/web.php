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
    return view('main.index');
});
Route::get('/puneet', function () {
    return view('auth.reg');
});

/*Authentication Controller*/
Auth::routes();

Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');


/*General/Main Controller*/
Route::get('/home', 'HomeController@index')->name('home');


/*Job Controller*/
Route::group(['prefix' => 'job'], function () 
{
    Route::get('/post', ['as' => 'postjob', 'uses' =>'JobController@postJob']);

    Route::post('/post/submit', ['as' => 'postjobsubmit', 'uses' =>'JobController@postJobSubmit']);

    Route::get('/all', ['as' => 'index', 'uses' =>'PostingController@index']);

    Route::get('/post/alljobs/details/{job_id}', ['as' => 'getdisplay', 'uses' => 'PostingController@getdisplay']);   

    Route::get('/search',  ['as' => 'search', 'uses' =>'PostingController@search']);

    Route::post('/search/searchcontent',  ['as' => 'searchcontent', 'uses' =>'PostingController@searchcontent']);
   

});
	



