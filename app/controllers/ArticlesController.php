<?php

class ArticlesController extends \BaseController {


	public function index()
	{
		$articles_count = Article::count();
		$articles = Article::where('user_id','=',Auth::id())->orderBy('id','DESC')->paginate(20);
		return View::make('articles.index',compact('articles','articles_count'));
	}


	public function create()
	{
		$categories = Category::orderby('id','DESC')->get();
		return View::make('articles.create', compact('categories'));
	}


	public function store()
	{
		$input = Input::all();

		$validation = Validator::make($input, Article::$rules);

		if ($validation->passes()) {
			$article = new Article();

            if(Input::get('slider'))
            {
                $article->slider =  1;
            }
            else
            {
                $article->slider =  0;
            }

			$article->title = Input::get('title');
			$article->body = Input::get('body');
			$article->author = 1;
			$article->status = Input::get('status');
			//if input has file

			if (Input::hasFile('file_url'))
			{
				$file = Input::file('file_url');
				$destinationPath = 'uploads/articles';
				$filename = time().$file->getClientOriginalName();
				Input::file('file_url')->move($destinationPath, $filename);
				$article->file_url = $filename;
			}
			else
			{
				$article->file_url = 'na.jpg';
			}

			$article->user_id = Auth::id();

			$article->save();

			//Add categories

			$categories = Input::get('categories');
			$subcategories = Input::get('subcategories');

			if($categories)
			{
				foreach($categories as $key => $value)
			{
				DB::table('article_category')->insert(array('category_id'=>$value,'article_id'=>$article->id));
			}
			}

			
			if($subcategories)
			{
				foreach($subcategories as $key => $value)
			{
				DB::table('article_subcategory')->insert(array('subcategory_id'=>$value,'article_id'=>$article->id,'category_id'=>'1'));
			}
			}


			return Redirect::route('articles')->with('message','Article added successfully.');
			}

			else {
			return Redirect::route('articles/create')
				->withInput()
				->withErrors($validation)
				->with('message', 'There were validation errors.');


		}
	}

	//Drafts 0
	//Published 1

	public function published()
	{
		$articles =Article::where('status','=',1)->paginate(20);
		return View::make('articles.published', compact('articles'));
	}

	public function drafts()
	{
		$articles =Article::where('status','=',0)->orderBy('id','DESC')->get();
		return View::make('articles.drafts', compact('articles'));
	}

	


	public function edit($id)
	{
		$categories = Category::all();
		$article = Article::find($id);
		return View::make('articles.edit', compact('article','categories'));
	}


	public function update()
	{

		$article = Article::find(Input::get('article_id'));

		$input = Input::all();

		$validation = Validator::make($input, Article::$rules);

		if ($validation->passes()) {

			$article->title = Input::get('title');
			$article->body = Input::get('body');
			$article->author = 1;
			

			//if input has file

			if (Input::hasFile('file_url'))
			{
				$file = Input::file('file_url');
				$destinationPath = 'uploads/articles';
				$filename = time().$file->getClientOriginalName();
				Input::file('file_url')->move($destinationPath, $filename);
				$article->file_url = $filename;
			}
			
			$article->status= Input::get('status');

			$article->user_id = Auth::id();

			$article->save();

			$article->category()->detach();

			$categories = Input::get('categories');
            $subcategories = Input::get('subcategories');

            if($categories)
            {
                foreach($categories as $key => $value)
                {
                    DB::table('article_category')->insert(array('category_id'=>$value,'article_id'=>$article->id));
                }
            }


            if($subcategories)
            {
                foreach($subcategories as $key => $value)
                {
                    DB::table('article_subcategory')->insert(array('subcategory_id'=>$value,'article_id'=>$article->id,'category_id'=>'1'));
                }
            }
			
			return Redirect::route('articles')->with('message','Article edited successfully.');
		}
		else 
		{
			return Redirect::route('articles/{$id}/edit')
				->withInput()
				->withErrors($validation)
				->with('message', 'There were validation errors.');


		}
	}



	public function destroy($id)
	{
		$article = Article::find($id);
		$article->category()->detach();
		$article->delete();
		return Redirect::route('articles')->with('message','Article deleted successfully.');
	}

}