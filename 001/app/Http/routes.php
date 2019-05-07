<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group([], function(){
	Route::match (['get', 'post'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);
	Route::get ('/page/{id}', ['uses'=>'PageController@execute', 'as'=>'page']);
	Route::auth();
});

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
	Route::get('/', function(){
		//
		if(view()->exists('admin.index')):
			$data = [
			'title' => 'You have admin',
			];
			return(view('admin.index', $data));
		endif;
		abort(404);
		
	});
	Route::group(['prefix'=>'pages'], function () {
		Route::get('/',['uses'=>'Admin\PagesController@execute', 'as'=>'pages']);
		Route::match(['get','post'], '/add', ['uses'=>'Admin\PagesAddController@execute', 'as'=>'pagesadd']);
		Route::match(['get','post','delete'], '/edit/{page}', ['uses'=>'Admin\PagesEditController@execute', 'as'=>'pagesedit']);
	});
});

//Route::auth();

//Route::get('/home', 'HomeController@index');
