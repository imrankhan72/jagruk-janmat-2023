<?php

class UsersController extends \BaseController {


	public function index()
	{
		$users = User::orderby('id','DESC')->get();
		return View::make('users.index', compact('users'));
	}


	public function create()
	{
		return View::make('users.create');
	}


	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, User::$rules);
		if ($validation->passes())
		{
			$user = new User($input);
			$user->password = Hash::make(Input::get('password'));
			$user->role = 2;
			$user->status = 1;
			$user->save($input);
			return Redirect::route('users/create')->with('message','Editor added successfully.');
		}

		else {
			return Redirect::route('users/create')
				->withInput()
				->withErrors($validation)
				->with('message', 'There were validation errors.');
		}
	}


	public function show($id)
	{
		//
	}


	public function edit()
	{
		$user= User::find(Auth::id());
		return View::make('users.edit',compact('user'));
	}


	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}

	public function change_password()
	{
		return View::make('users.change_password');
	}


	public function do_change_password()
	{
		$user = User::find(Auth::id());
		if(Hash::check(Input::get('old_password'),$user->password))
		{
			$user->password = Hash::make(Input::get('new_password'));
			$user->save();
			return Redirect::route('users/change_password')->with('message','Password changed successfully.');
		}
//		else
//		{
//			return Redirect::route('users/change_password')->with('message','Old password did not matched);
//		}


	}

}