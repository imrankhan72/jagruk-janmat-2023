<?php

class SubcategoryController extends \BaseController {


	public function index()
	{
		$subcategories = Subcategory::orderby('category_id','ASC')->get();
		return View::make('subcategories.index',compact('subcategories'));	}


	public function create()
	{
		$categories = Category::lists('name','id');
		return View::make('subcategories.create',compact('categories'));
	}

	
	public function store()
	{
		$input = Input::all();
        $validation = Validator::make($input, Subcategory::$rules);
        if ($validation->passes())
         {
            $subcategory = new Subcategory($input);
            $subcategory->save($input);
            return Redirect::route('subcategories/create')->with('message','Sub-Category added successfully.');
  		 }

        else {
            return Redirect::route('subcategories/create')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }
	}


	public function destroy($id)
	{
		$subcategory  = Subcategory::find($id);
		$subcategory->delete();
		return Redirect::route('subcategories')->with('message','Sub-Category deleted successfully.');
	}

}