<?php

class ApiController extends \BaseController {

    public function home()
    {

        $news = Article::orderBy('id', 'DESC')->select(array('id', 'title','file_url','created_at'))->take(10)->get();

        $feed = Rss::feed('2.0', 'UTF-8');
        $feed->channel(array('title' => 'Tapas Kranti', 'description' => 'Tapas Kranti News Portal', 'link' => 'http://www.tapaskranti.com/'));
        foreach ($news as $news){

            $feed->item(array('title' => $news->title,'created_at' => $news->created_at, 'description|cdata' => $news->title, 'link' => 'http://www.tapaskranti.com/read'.$news->id));
        }

        return Response::make($feed, 200, array('Content-Type' => 'text/xml'));


    }


    public function newsdetails($id)
    {
        $news = Article::find($id);

        $feed = Rss::feed('2.0', 'UTF-8');
        $feed->channel(array('title' => 'Tapas Kranti', 'description' => 'Tapas Kranti News Portal', 'link' => 'http://www.tapaskranti.com/'));
        $feed->item(array('title' => $news->title, 'description|cdata' => $news->body,'link'=>'http://tapaskranti.com/uploads/articles/'.$news->file_url));
        return Response::make($feed, 200, array('Content-Type' => 'text/xml'));
    }

    public function categorywise($id)
    {
        $news = Category::find($id)->articles()->select(array('articles.id','title','file_url','body','articles.created_at'))->orderby('id','DSC')->take(20)->get();

        $feed = Rss::feed('2.0', 'UTF-8');
        $feed->channel(array('title' => 'Tapas Kranti', 'description' => 'Tapas Kranti News Portal', 'link' => 'http://www.tapaskranti.com/'));
        foreach ($news as $news){

            $feed->item(array('title' => $news->title, 'link'=>'http://tapaskranti.com/read/'.$news->id
            ,'description|cdata' =>"<img src="."'http://tapaskranti.com/uploads/articles/".$news->file_url."'/>". $news->body));
        }

        return Response::make($feed, 200, array('Content-Type' => 'text/xml'));

    }

    public function subcategorywise($id)
    {
        $news = Subcategory::find($id)->articles()->select(array('articles.id','title','file_url','body','articles.created_at'))->orderby('id','DSC')->take(20)->get();

        $feed = Rss::feed('2.0', 'UTF-8');
        $feed->channel(array('title' => 'Tapas Kranti', 'description' => 'Tapas Kranti News Portal', 'link' => 'http://www.tapaskranti.com/'));
        foreach ($news as $news){

            $feed->item(array('title' => $news->title, 'link'=>'http://tapaskranti.com/read/'.$news->id
            ,'description|cdata' =>"<img src="."'http://tapaskranti.com/uploads/articles/".$news->file_url."'/>". $news->body));
        }

        return Response::make($feed, 200, array('Content-Type' => 'text/xml'));

    }


    public function categories()
    {
        $categories = Category::select(array('id', 'name'))->get();

        $feed = Rss::feed('2.0', 'UTF-8');
        $feed->channel(array('title' => 'Tapas Kranti', 'description' => 'Tapas Kranti News Portal', 'link' => 'http://www.tapaskranti.com/'));
        foreach ($categories as $category){
            $feed->item(array('title' => $category->name));
        }

        return Response::make($feed, 200, array('Content-Type' => 'text/xml'));


    }



    public function videos()
    {
        $videos = Video::where('status','=','1')->orderBy('id', 'DESC')->get();

        $response = Response::json($videos);
        //$response = Response::json($data);
        $response->header('Access-Control-Allow-Origin','*' );
        return $response;

    }

    public function allnews()
    {
        $news = Article::orderBy('id', 'DESC')->select(array('id', 'title'))->get();
        $response = Response::json($news);
        $response->header('Access-Control-Allow-Origin','*' );
        return $response;
    }

}