<?php

//Route::get('/', function()
//{
//	return Hash::make('admin');
//});


// Event::listen('illuminate.query',function($sql){
//    var_dump($sql);
//    echo "<br/>";
// });

Route::group(array('prefix' => 'api'), function()
{
    Route::get('home', array('as' => 'api-home', 'uses' => 'ApiController@home'));
    Route::get('news/{id}/newsdetails', array('as' => 'news/{id}/newsdetails', 'uses' => 'ApiController@newsdetails'));
    Route::get('categorywise/{id}', array('as' => 'categorywise/{id}', 'uses' => 'ApiController@categorywise'));
    Route::get('subcategorywise/{id}', array('as' => 'categorywise/{id}', 'uses' => 'ApiController@subcategorywise'));
    Route::get('videos', array('as' => 'videos', 'uses' => 'ApiController@videos'));
    Route::get('allnews', array('as' => 'allnews', 'uses' => 'ApiController@allnews'));
    Route::get('categories', array('as' => 'categories', 'uses' => 'ApiController@categories'));


});


Route::get('/', array('as' => '/', 'uses' => 'SiteController@home'));
Route::get('read/{id}', array('as' => 'read/{id}', 'uses' => 'SiteController@read_article'));
Route::get('articles/{id}', array('as' => 'articles/{id}', 'uses' => 'SiteController@category_wise_articles'));
Route::get('subarticles/{id}', array('as' => 'subarticles/{id}', 'uses' => 'SiteController@subcategory_wise_articles'));
Route::get('pages/{name}', array('as' => 'pages/{name}', 'uses' => 'SiteController@pages'));
Route::get('gallery', array('as' => 'gallery', 'uses' => 'SiteController@gallery'));
Route::get('videos', array('as' => 'videos', 'uses' => 'SiteController@videos'));
Route::post('comments/store', array('as' => 'comments/store', 'uses' => 'CommentsController@store'));
Route::post('add_poll', array('as' => 'add_poll', 'uses' => 'SiteController@add_poll'));


Route::post('dologin', array('as' => 'dologin', 'uses' => 'SessionsController@dologin'));
Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@login'));
Route::get('admin', array('as' => 'admin', 'uses' => 'SessionsController@login'));




Route::group(array('before' => 'auth|admin','prefix'=>'admin'), function()
{
	Route::get('logout', array('as' => 'logout', 'uses' => 'SessionsController@logout'));

	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@dashboard'));


	Route::get('banners', array('as' => 'banners', 'uses' => 'BannersController@index'));
	Route::get('banners/create', array('as' => 'banners/create', 'uses' => 'BannersController@create'));
	Route::post('banners/store', array('as' => 'banners/store', 'uses' => 'BannersController@store'));
	Route::get('banners/{id}/delete', array('as' => 'banners/{id}/delete', 'uses' => 'BannersController@destroy'));


	Route::get('polls', array('as' => 'polls', 'uses' => 'PollsController@index'));
	Route::get('polls/create', array('as' => 'polls/create', 'uses' => 'PollsController@create'));
	Route::post('polls/store', array('as' => 'polls/store', 'uses' => 'PollsController@store'));
	Route::get('polls/{id}/delete', array('as' => 'polls/{id}/delete', 'uses' => 'PollsController@destroy'));

	Route::get('categories', array('as' => 'categories', 'uses' => 'CategoriesController@index'));
	Route::get('categories/create', array('as' => 'categories/create', 'uses' => 'CategoriesController@create'));
	Route::post('categories/store', array('as' => 'categories/store', 'uses' => 'CategoriesController@store'));
	Route::get('categories/{id}/edit', array('as' => 'categories/{id}/edit', 'uses' => 'CategoriesController@edit'));
	Route::post('categories/update', array('as' => 'categories/update', 'uses' => 'CategoriesController@update'));
	Route::get('categories/{id}/delete', array('as' => 'categories/{id}/delete', 'uses' => 'CategoriesController@destroy'));


	Route::get('subcategories', array('as' => 'subcategories', 'uses' => 'SubcategoryController@index'));
	Route::get('subcategories/create', array('as' => 'subcategories/create', 'uses' => 'SubcategoryController@create'));
	Route::post('subcategories/store', array('as' => 'subcategories/store', 'uses' => 'SubcategoryController@store'));
	Route::get('subcategories/{id}/edit', array('as' => 'subcategories/{id}/edit', 'uses' => 'SubcategoryController@edit'));
	Route::post('subcategories/update', array('as' => 'subcategories/update', 'uses' => 'SubcategoryController@update'));
	Route::get('subcategories/{id}/delete', array('as' => 'subcategories/{id}/delete', 'uses' => 'SubcategoryController@destroy'));


	Route::get('articles', array('as' => 'articles', 'uses' => 'ArticlesController@index'));
	Route::get('articles/create', array('as' => 'articles/create', 'uses' => 'ArticlesController@create'));
	Route::post('articles/store', array('as' => 'articles/store', 'uses' => 'ArticlesController@store'));
	Route::get('articles/{id}/edit', array('as' => 'articles/{id}/edit', 'uses' => 'ArticlesController@edit'));
	Route::post('articles/update', array('as' => 'articles/update', 'uses' => 'ArticlesController@update'));
	Route::get('articles/{id}/delete', array('as' => 'articles/{id}/delete', 'uses' => 'ArticlesController@destroy'));
	Route::get('articles/pending', array('as' => 'articles/pending', 'uses' => 'ArticlesController@pending'));
	Route::get('articles/published', array('as' => 'articles/published', 'uses' => 'ArticlesController@published'));
	Route::get('articles/drafts', array('as' => 'articles/drafts', 'uses' => 'ArticlesController@drafts'));
	Route::get('articles/{id}/publish_article', array('as' => 'articles/{id}/publish_article', 'uses' => 'ArticlesController@publish_article'));

	Route::get('pages', array('as' => 'pages', 'uses' => 'PagesController@index'));
	Route::get('pages/{id}/edit', array('as' => 'pages/{id}/edit', 'uses' => 'PagesController@edit'));
	Route::post('pages/update', array('as' => 'pages/update', 'uses' => 'PagesController@update'));

	

	Route::get('comments', array('as' => 'comments', 'uses' => 'CommentsController@index'));
	Route::get('comments/create', array('as' => 'comments/create', 'uses' => 'CommentsController@create'));
	Route::get('comments/{id}/edit', array('as' => 'comments/{id}/edit', 'uses' => 'CommentsController@edit'));
	Route::post('comments/update', array('as' => 'comments/update', 'uses' => 'CommentsController@update'));
	Route::get('comments/{id}/delete', array('as' => 'comments/{id}/delete', 'uses' => 'CommentsController@destroy'));
	Route::get('comments/{id}/publish_comment', array('as' => 'comments/{id}/publish_comment', 'uses' => 'CommentsController@publish_comment'));

	Route::get('users', array('as' => 'users', 'uses' => 'UsersController@index'));
	Route::get('users/create', array('as' => 'users/create', 'uses' => 'UsersController@create'));
	Route::post('users/store', array('as' => 'users/store', 'uses' => 'UsersController@store'));
	Route::get('users/edit', array('as' => 'users/edit', 'uses' => 'UsersController@edit'));
	Route::post('users/update', array('as' => 'users/update', 'uses' => 'UsersController@update'));
	Route::get('users/{id}/delete', array('as' => 'users/{id}/delete', 'uses' => 'UsersController@destroy'));

	Route::get('users/change_password', array('as' => 'users/change_password', 'uses' => 'UsersController@change_password'));
	Route::post('users/change_password', array('as' => 'users/change_password', 'uses' => 'UsersController@do_change_password'));

	Route::get('links', array('as' => 'links', 'uses' => 'LinksController@index'));
	Route::get('links/create', array('as' => 'links/create', 'uses' => 'LinksController@create'));
	Route::post('links/store', array('as' => 'links/store', 'uses' => 'LinksController@store'));
	Route::get('links/{id}/delete', array('as' => 'links/{id}/delete', 'uses' => 'LinksController@destroy'));

	Route::get('alerts', array('as' => 'alerts', 'uses' => 'AlertsController@index'));
	Route::get('alerts/create', array('as' => 'alerts/create', 'uses' => 'AlertsController@create'));
	Route::post('alerts/store', array('as' => 'alerts/store', 'uses' => 'AlertsController@store'));
	Route::get('alerts/{id}/delete', array('as' => 'alerts/{id}/delete', 'uses' => 'AlertsController@destroy'));

	Route::get('videos', array('as' => 'videos', 'uses' => 'VideosController@index'));
	Route::get('videos/create', array('as' => 'videos/create', 'uses' => 'VideosController@create'));
	Route::post('videos/store', array('as' => 'videos/store', 'uses' => 'VideosController@store'));
	Route::get('videos/{id}/edit', array('as' => 'videos/{id}/edit', 'uses' => 'VideosController@edit'));
	Route::post('videos/update', array('as' => 'videos/update', 'uses' => 'VideosController@update'));
	Route::get('videos/{id}/delete', array('as' => 'videos/{id}/delete', 'uses' => 'VideosController@destroy'));

	Route::get('sliders', array('as' => 'sliders', 'uses' => 'SlidersController@index'));
	Route::get('sliders/create', array('as' => 'sliders/create', 'uses' => 'SlidersController@create'));
	Route::post('sliders/store', array('as' => 'sliders/store', 'uses' => 'SlidersController@store'));
	Route::get('sliders/{id}/edit', array('as' => 'sliders/{id}/edit', 'uses' => 'SlidersController@edit'));
	Route::post('sliders/update', array('as' => 'sliders/update', 'uses' => 'SlidersController@update'));
	Route::get('sliders/{id}/delete', array('as' => 'sliders/{id}/delete', 'uses' => 'SlidersController@destroy'));

	Route::get('albums', array('as' => 'albums', 'uses' => 'AlbumsController@index'));
	Route::get('photos', array('as' => 'photos', 'uses' => 'AlbumsController@photos'));
	Route::get('albums/create', array('as' => 'albums/create', 'uses' => 'AlbumsController@create'));
	Route::post('albums/store', array('as' => 'albums/store', 'uses' => 'AlbumsController@store'));
	Route::get('albums/{id}/edit', array('as' => 'albums/{id}/edit', 'uses' => 'AlbumsController@edit'));
	Route::post('albums/update', array('as' => 'albums/update', 'uses' => 'AlbumsController@update'));
	Route::get('albums/{id}/delete', array('as' => 'albums/{id}/delete', 'uses' => 'AlbumsController@destroy'));
	Route::get('albums/1/addPhoto', array('as' => 'albums/1/addPhoto', 'uses' => 'AlbumsController@addPhoto'));
	Route::post('albums/doaddPhoto', array('as' => 'albums/doaddPhoto', 'uses' => 'AlbumsController@doaddPhoto'));
	Route::get('albums/{id}/deletephoto', array('as' => 'albums/{id}/deletephoto', 'uses' => 'AlbumsController@deletephoto'));


});

Route::group(array('before' => 'auth','prefix'=>'editor'), function()
{
	Route::get('logout', array('as' => 'logout', 'uses' => 'SessionsController@logout'));

	Route::get('articles', array('as' => 'articles', 'uses' => 'ArticlesController@index'));
	Route::get('articles/create', array('as' => 'articles/create', 'uses' => 'ArticlesController@create'));
	Route::post('articles/store', array('as' => 'articles/store', 'uses' => 'ArticlesController@store'));
	Route::get('articles/{id}/edit', array('as' => 'articles/{id}/edit', 'uses' => 'ArticlesController@edit'));
	Route::post('articles/update', array('as' => 'articles/update', 'uses' => 'ArticlesController@update'));
	Route::get('articles/{id}/delete', array('as' => 'articles/{id}/delete', 'uses' => 'ArticlesController@destroy'));
	Route::get('articles/drafts', array('as' => 'articles/drafts', 'uses' => 'ArticlesController@drafts'));


	Route::get('users/edit', array('as' => 'users/edit', 'uses' => 'UsersController@edit'));
	Route::post('users/update', array('as' => 'users/update', 'uses' => 'UsersController@update'));

	Route::get('users/change_password', array('as' => 'users/change_password', 'uses' => 'UsersController@change_password'));
	Route::post('users/change_password', array('as' => 'users/change_password', 'uses' => 'UsersController@do_change_password'));


});

View::composer('site.header', function($view){


    $article = Article::first();

    if(Route::currentRouteName()== 'read/{id}')
    {
        $article = Article::find(Route::input('id'));
    }

	$site_name = Siteinfo::find(1)->name;
	$site_hits = Siteinfo::find(1)->hits;
	$pages = Page::all();
	$alerts = Alert::orderBy('id','DESC')->get();
	$categories = Category::all();
	$top_banners = Banner::where('position','=','top-banner')->where('status','=','1')->get();
	$view->with('alerts', $alerts)->with('categories', $categories)->with('site_name', $site_name)
			->with('pages', $pages)->with('site_hits', $site_hits)
			->with('top_banners', $top_banners)
                ->with('article', $article);
});

View::composer('site.footer', function($view){

	$site_name = Siteinfo::find(1)->name;
	$site_hits = Siteinfo::find(1)->hits;
	$pages = Page::all();
    $categories = Category::all();

    $view->with('site_name', $site_name)->with('categories', $categories)
			->with('pages', $pages)->with('site_hits', $site_hits);
});

View::composer('site.sidebar', function($view){
    $links = Link::orderby('id','Desc')->take(10)->get();
	//$articles = Article::orderby('id','Desc')->skip(10)->take(4)->get();
	$video = Video::orderBy('id','DESC')->first();
	$photo = Photo::orderBy('id','DESC')->first();
	$poll = Poll::orderBy('id','DESC')->first();
	$sidebar_top_ads = Banner::where('position','=','side-bar-top')->where('status','=','1')->orderBy('id','DESC')->get();
	$sidebar_footer_ads = Banner::where('position','=','side-bar-footer')->where('status','=','1')->orderBy('id','DESC')->get();
	
	$view->with('links', $links)
			->with('video',$video)->with('photo',$photo)
				->with('poll',$poll)->with('sidebar_top_ads',$sidebar_top_ads)
					->with('sidebar_footer_ads',$sidebar_footer_ads);
});