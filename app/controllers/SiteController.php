<?php

class SiteController extends \BaseController {

	public function home()
	{
	return "hii";
		
		$site = Siteinfo::find(1);
		$hits = $site->hits;
		$site->hits = $hits + 1;
		$site->save();


        $categories = Category::orderBy('id','ASC')->take(6)->get();
         $articles1 = $categories[0]->articles()->orderBy('id','DESC')->get();
         $articles2 = $categories[1]->articles()->orderBy('id','DESC')->get();
         $articles3 = $categories[2]->articles()->orderBy('id','DESC')->get();
         $articles4 = $categories[3]->articles()->orderBy('id','DESC')->get();


        $sliders = Article::where('slider','=','1')->orderBy('id','DSC')->take(6)->get();
        $latest_articles = Article::where('status','=','1')->orderBy('id','DSC')->take(4)->get();

		$alerts = Alert::orderBy('id','DESC')->get();
	
		$photos = Photo::orderBy('id','DESC')->take(1)->get();

		$middle_banners = Banner::where('position','=','middle-banner')->where('status','=','1')->get();

		$second_middle_banners = Banner::where('position','=','2nd-middle-banner')->where('status','=','1')->get();

		$footer_banners = Banner::where('position','=','footer-banner')->where('status','=','1')->get();




		return View::make('site.home',compact('latest_articles','categories','articles1','articles2','articles3','articles4','footer_banners','second_middle_banners','middle_banners','alerts','photos','sliders','categories'));
	}

	public function read_article($id)
	{
		$article = Article::find($id);
		$comments = Comment::where('article_id','=',$article->id)->where('status','=','1')->get();
		return View::make('site.detail',compact('article','comments'));

	}

	public function category_wise_articles($id)
	{

		$articles = Category::find($id)->articles()->orderBy('id','DESC')->paginate(10);
		return View::make('site.category',compact('articles'));
	}


	public function subcategory_wise_articles($id)
	{

		
		$articles = Subcategory::find($id)->articles()->orderBy('id','DSC')->paginate(10);
		return View::make('site.category',compact('articles'));
	}



	public function pages($name)
	{
		 $page = Page::where('name','=',$name)->first();
		return View::make('site.pages',compact('page'));
	}


	public function gallery()
	{
		$photos = Photo::orderBy('id','DESC')->take(20)->get();
		return View::make('site.gallery',compact('photos'));
	}

	public function videos()
	{
		$videos = Video::orderBy('id','DESC')->get();
		return View::make('site.videos',compact('videos'));
	}

	public function add_poll()
	{
		 $poll = Poll::find(Input::get('poll_id'));
		
		if(Input::get('answers') == "answer1")
		{
			$poll->answer1_count++;
		}
		elseif(Input::get('answers') == "answer2")
		{
			$poll->answer2_count++;
		}
		else
		{
			$poll->answer3_count++;
		}
	
		$poll->save();

		return Redirect::route('/')->with('Thanks for your vote');

	}

	



}