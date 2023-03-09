<?php

class BannersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /banners
	 *
	 * @return Response
	 */
	public function index()
	{
		$banners = Banner::orderby('id','DESC')->get();
		return View::make('banners.index',compact('banners'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /banners/create
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('banners.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /banners
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$validation = Validator::make($input, Banner::$rules);

		if ($validation->passes()) {
			$banner = new Banner();

			$banner->name = Input::get('name');
			$banner->position = Input::get('position');
			$banner->link = Input::get('link');
			$banner->from_date = Input::get('from_date');
			$banner->till_date = Input::get('till_date');
			//if input has file

			if (Input::hasFile('file_url'))
			{
				$file = Input::file('file_url');
				$destinationPath = 'uploads/articles';
				$filename = time().$file->getClientOriginalName();
				Input::file('file_url')->move($destinationPath, $filename);
				$banner->file_url = $filename;
			}
			else
			{
				$banner->file_url = 'na.jpg';
			}

			$banner->save();	

			return Redirect::route('banners')->with('message','Banner added successfully.');
			}

			else {
			return Redirect::route('banners/create')
				->withInput()
				->withErrors($validation)
				->with('message', 'There were validation errors.');


		}
	}

	/**
	 * Display the specified resource.
	 * GET /banners/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /banners/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /banners/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /banners/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$banner =  Banner::find($id);
		$banner ->delete();
		return Redirect::route('banners')->with('message','Banner deleted successfully.');
	}

}