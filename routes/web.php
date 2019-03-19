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


Route::group(['prefix' => 'job'], function () 
{
    Route::get('/post', ['as' => 'postjob', 'uses' =>'JobController@postJob']);

    Route::post('/post/submit', ['as' => 'postjobsubmit', 'uses' =>'JobController@postJobSubmit']);

    Route::get('/post/alljobs', ['as' => 'index', 'uses' =>'PostingController@index']);

    Route::get('/post/alljobs/details/{job_id}', ['as' => 'getdisplay', 'uses' => 'PostingController@getdisplay']);

	Route::get('/validation',function()
	{
     return view('validation');
 	});

    

    Route::get('/search',  ['as' => 'search', 'uses' =>'PostingController@search']);

    Route::post('/search/searchcontent',  ['as' => 'searchcontent', 'uses' =>'PostingController@searchcontent']);
   

     });
	