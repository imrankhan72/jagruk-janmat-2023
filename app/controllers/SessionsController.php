<?php

class SessionsController extends \BaseController {
	public function login()
	{
		return View::make('sessions.login');
	}

	public function dologin()
	{
		$input = Input::all();

		$attempt = Auth::attempt(array(
			'username' =>$input['username'],
			'password' =>$input['password'],
		 	'status' => 1
		));

		if ($attempt)
		{
			if (Auth::user())
			{
				if(Auth::user()->role == 1)
				{
					return Redirect::to('admin/dashboard');
				}
				else
				{
					return Redirect::to('editor/articles');
				}

			}

		}else
		{
			return Redirect::to('login')->with('message','username and password do not match. Please try again');
		}
	}


	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}
}