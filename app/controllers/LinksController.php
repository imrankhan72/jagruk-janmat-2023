<?php

class LinksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /links
	 *
	 * @return Response
	 */
	public function index()
	{
		$links = Link::orderby('id','DESC')->get();
		return View::make('links.index',compact('links'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /links/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('links.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /links
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        $validation = Validator::make($input, Link::$rules);
        if ($validation->passes())
         {
            $link = new Link($input);
            $link->save($input);
            return Redirect::route('links/create')->with('message','link created successfully.');
  		 }
        else 
        {
            	return Redirect::route('links/create')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }
	}


	public function destroy($id)
	{
		
		$link = Link::find($id);
		//return $link ;
		$link->delete();


		return Redirect::route('links')->with('message','Link deleted successfully.');
	}

}