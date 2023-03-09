<?php

class AlertsController extends \BaseController {


	public function index()
	{
		$alerts = Alert::orderBy('id','DESC')->get();
		return View::make('alerts.index', compact('alerts'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /trending/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('alerts.create');
	}

	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Alert::$rules);
		if ($validation->passes())
		{
			$alert = new Alert($input);
			$alert->save($input);
			return Redirect::route('alerts/create')->with('message','Alert  added successfully.');
		}

		else {
			return Redirect::route('alerts/create')
				->withInput()
				->withErrors($validation)
				->with('message', 'There were validation errors.');
		}
	}
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /trending/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alerts = Alert::find($id);
		return View::make('alerts.edit',compact('alerts'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /trending/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$alert = Alert::find(Input::get('alert_id'));
		$input = Input::all();
		$validation = Validator::make($input, Alert::$rules);

		if ($validation->passes())
		{
			
			$alert->content = Input::get('content');
			$alert->save($input);
			return Redirect::route('alerts')->with('message','Alerts updated successfully.');
		}

		else {
			return Redirect::route('alerts/edit')
				->withInput()
				->withErrors($validation)
				->with('message', 'There were validation errors.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /trending/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$alert = Alert::find($id);
		$alert->delete();
		return Redirect::route('alerts')->with('message','Alert deleted successfully.');
	}

}