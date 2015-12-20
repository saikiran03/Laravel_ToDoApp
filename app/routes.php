<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/about',function(){
	return View::make('about',array(
		'users' => ['Sai Kiran','Siva Sagar','Madhu Sai']
	));
});

Route::get('/master',function(){
	return View::make('master');
});

Route::get('/login',function(){
	return View::make('login');
});

Route::get('/todo',function(){
	$records = Todo::all();
	return View::make('todo',array(
		'records' => $records
	));
});

Route::post('/todo',function(){
	ToDo::create([
		'task' => Input::get('task'),
		'status' => 0,
		'deadline' => Input::get('deadline')
	]);
	return View::make('todo',array(
		'records' => ToDo::all()
	));
});

Route::get('/changeStat/{id}',['uses' => 'ToDoController@changeStatus']);

Route::get('/sn/login',function(){
	return View::make('social_network/login');
});