<?php

class DashboardController extends \BaseController {

	public function dashboard()
	{
		$unpublished_articles = Article::where('status','=','2')->get();
		$unpublished_comments = Comment::where('status','=','0')->get();
		return View::make('dashboard.dashboard',compact('unpublished_articles','unpublished_comments'));
	}
}