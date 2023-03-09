<?php

class PollsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /polls
	 *
	 * @return Response
	 */
	public function index()
	{
		 $polls = Poll::orderBy('id','DESC')->get();
		return View::make('polls.index',compact('polls'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /polls/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('polls.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /polls
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        $validation = Validator::make($input, Poll::$rules);
        if ($validation->passes())
         {
            $poll = new Poll($input);
            $poll->save($input);
            return Redirect::route('polls/create')->with('message','Poll created successfully.');
  		 }
        else 
        {
            	return Redirect::route('polls/create')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }
	}

	/**
	 * Display the specified resource.
	 * GET /polls/{id}
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
	 * GET /polls/{id}/edit
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
	 * PUT /polls/{id}
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
	 * DELETE /polls/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$poll = Poll::find($id);
		$poll->delete();
		return Redirect::route('polls')->with('message','Poll deleted successfully.');
	}

}