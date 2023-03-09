<?php

class AlbumsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /albums
	 *
	 * @return Response
	 */
	public function index()
	{
		$albums = Album::orderby('id','Desc')->get();
		return View::make('albums.index',compact('albums'));
	}

	public function photos()
	{
		$photos = Photo::orderby('id','Desc')->get();
		return View::make('albums.index',compact('photos'));
	}


	/**
	 * Show the form for creating a new resource.
	 * GET /albums/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('albums.create');
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
        $validation = Validator::make($input, Album::$rules);
        if ($validation->passes())
         {
            $album = new Album($input);
            $album->save($input);
            return Redirect::route('photos')->with('message','Album created successfully.');
  		 }
        else 
        {
            	return Redirect::route('albums/create')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }
	}


	public function edit($id)
	{
		$album = Album::find($id);
		return View::make('albums.edit',compact('album'));

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
		$album = Album::find(Input::get('album_id'));
		$album->name = Input::get('name');
		$album->save();
		return Redirect::route('albums')->with('message','Album edited successfully.');
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
		$photo = Photo::find($id);
		$photo->delete();
		return Redirect::route('photos')->with('message','photo deleted successfully.');
	}

	public function addPhoto()
	{
		$album =Album::find(1);
		$photos = Album::find(1)->photos;
		return View::make('albums.photo',compact('album','photos'));
		//return $photos;
	}

	public function doaddPhoto()
	{
		$input = Input::all();
		$id = Input::get('album_id');
        $validation = Validator::make($input, Photo::$rules);
        if ($validation->passes())
         {
            $photo = new Photo($input);

            $image = Input::file('image_url');
        	$filename  = time() . '.' . $image->getClientOriginalExtension();
        	Image::make($image->getRealPath())->resize(600, 600)->save('uploads/images/'.$filename);
        	Image::make($image->getRealPath())->resize(150, 150)->save('uploads/images/thumbs/'.$filename);
        	$photo->image_url = $filename;

            $photo->save($input);
            return Redirect::route('photos')->with('message','Photo added successfully.');
            //return Redirect::route('photos/2/create')->with('message','Photo added successfully.');
  		 }
        else 
        {
            	return Redirect::route('photos/{id}/create')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }
	}

	public function deletephoto($id)
	{
			$photo = Photo::find($id);
			$photo->delete();
			return Redirect::route('albums')->with('message','Photo deleted successfully.');

	}


}