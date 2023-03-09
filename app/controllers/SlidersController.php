<?php

class SlidersController extends \BaseController {

	public function index()
	{
		$sliders = Slider::orderby('id','Desc')->get();
		return View::make('sliders.index',compact('sliders'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /albums/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sliders.create');
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
        $validation = Validator::make($input, Slider::$rules);
        if ($validation->passes())
         {
            $slider = new Slider($input);

            $image = Input::file('image_url');
        	$filename  = time() . '.' . $image->getClientOriginalExtension();
        	Image::make($image->getRealPath())->resize(484, 351)->save('uploads/sliders/'.$filename);
        	Image::make($image->getRealPath())->resize(150, 100)->save('uploads/sliders/thumbs/'.$filename);
        	$slider->image_url = $filename;

            $slider->save($input);
            return Redirect::route('sliders/create')->with('message','slider created successfully.');
  		 }
        else 
        {
            	return Redirect::route('sliders/create')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }
	}


	public function edit($id)
	{
		$slider = Slider::find($id);
		return View::make('sliders.edit',compact('slider'));

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
		$slider = Slider::find(Input::get('slider_id'));
		$slider->caption = Input::get('caption');
		$slider->link = Input::get('link');
		if (Input::hasFile('image_url'))
			{		
            $image = Input::file('image_url');
        	$filename  = time() . '.' . $image->getClientOriginalExtension();
        	Image::make($image->getRealPath())->resize(1918, 460)->save('uploads/sliders/'.$filename);
        	Image::make($image->getRealPath())->resize(468, 249)->save('uploads/sliders/thumbs/'.$filename);
        	$slider->image_url = 'uploads/sliders/'.$filename;
			}
		$slider->save();
		return Redirect::route('sliders')->with('message','Slider edited successfully.');
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
		$slider = Slider::find($id);
		$slider->delete();
		return Redirect::route('sliders')->with('message','Slider deleted successfully');
	}	

}