<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		return View::make('/home/index');
	}
	
	public function showAdminIndex()
	{
		return View::make('/home/admin_index');
	}
	
	public function showLogin() 
	{
		return View::make('/home/login');
	}
	
	public function actionLogOut()
	{
		Auth::logout();
		return Redirect::to('/login');
	}
	
	public function handleLogin() 
	{
		$credentials = Input::only('username', 'password');
		
		if (Auth::attempt($credentials)){
			return Redirect::intended('/holiday/index');
		}
		
		return Redirect::to('/login');
	}

}
