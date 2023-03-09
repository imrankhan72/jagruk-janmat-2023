<?php

class VideosController extends \BaseController {
/**
	 * Display a listing of the resource.
	 * GET /albums
	 *
	 * @return Response
	 */
	public function index()
	{
		$videos = Video::orderby('id','Desc')->get();
		return View::make('videos.index',compact('videos'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /albums/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('videos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /albums
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        $validation = Validator::make($input, Video::$rules);
        if ($validation->passes())
         {
            $video = new Video($input);
            $video->save($input);
            return Redirect::route('videos/create')->with('message','Video created successfully.');
  		 }
        else 
        {
            	return Redirect::route('videos/create')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }
	}


	public function edit($id)
	{
		$video = Video::find($id);
		return View::make('videos.edit',compact('video'));

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /albums/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$video = Video::find(Input::get('video_id'));
		$video->link = Input::get('link');
		$video->caption = Input::get('caption');
		$video->save();
		return Redirect::route('videos')->with('message','Video edited successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /albums/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$video = Video::find($id);
		$video->delete();
		return Redirect::route('videos')->with('message','Video deleted successfully.');
	}

}