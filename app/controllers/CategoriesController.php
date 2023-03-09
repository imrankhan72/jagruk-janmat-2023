<?php

class CategoriesController extends \BaseController {

	public function index()
	{
		$categories = Category::Orderby('id','DESC')->get();
		return View::make('categories.index', compact('categories'));
	}


	public function create()
	{
		return View::make('categories.create');
	}

	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Category::$rules);
		if ($validation->passes())
		{
			$category = new Category($input);
			$category->save($input);
			return Redirect::route('categories/create')->with('message','Category added successfully.');
		}

		else {
			return Redirect::route('categories/create')
				->withInput()
				->withErrors($validation)
				->with('message', 'There were validation errors.');
		}
	}

	public function edit($id)
	{
		$category  = Category::find($id);
		return View::make('categories.edit',compact('category'));
	}


	public function update()
	{
		$category = Category::find(Input::get('category_id'));
		$input = Input::all();
		$validation = Validator::make($input, Category::$rules);

		if ($validation->passes())
		{
			
			$category->name = Input::get('name');
			$category->save($input);
			return Redirect::route('categories')->with('message','Category edited successfully.');
		}

		else {
			return Redirect::route('category/edit')
				->withInput()
				->withErrors($validation)
				->with('message', 'There were validation errors.');
		}
	}


	public function destroy($id)
	{
		$category  = Category::find($id);
		$category->delete();
		return Redirect::route('categories')->with('message','Category deleted successfully.');
	}
}