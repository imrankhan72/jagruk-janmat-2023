<?php

class CommentsController extends \BaseController {


	public function index()
	{
		$comments = Comment::has('article')->orderby('id','DESC')->get();
		return View::make('comments.index',compact('comments'));
	}



	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Comment::$rules);
		if ($validation->passes())
		{
			$comment = new Comment($input);
			$comment->save($input);
			return Redirect::route('read/{id}',array('id'=>Input::get('article_id')))->with('message','Comment submitted successfully.');
		}

	}


	public function publish_comment($id)
	{
		$comment = Comment::find($id);
		$comment->status = 1;
		$comment->save();
		return Redirect::route('comments')->with('message','Comment published successfully.');
	}



	public function destroy($id)
	{
		$comment = Comment::find($id);
		$comment->delete();
		return Redirect::route('comments')->with('message','Comment deleted successfully.');
	}

}