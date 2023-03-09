<?php

class PagesController extends \BaseController {


	public function index()
	{
		$pages = Page::all();
		return View::make('pages.index', compact('pages'));
	}


	public function edit($id)
	{
		$page = Page::find($id);
		return View::make('pages.edit', compact('page'));
	}

	public function update()
	{
		$page = Page::find(Input::get('page_id'));
		$input = Input::all();
		$validation = Validator::make($input, Page::$rules);

		if ($validation->passes())
		{
			$page->title = Input::get('title');
			$page->content = Input::get('content');
			$page->save($input);
			return Redirect::route('pages')->with('message','Page edited successfully.');
		}

		else {
			return Redirect::route('pages/create')
				->withInput()
				->withErrors($validation)
				->with('message', 'There were validation errors.');
		}
	}


}