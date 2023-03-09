@include('site.header')


        <!--news-alearts-bloc start-->
<div class="row news-alearts-block">
    <div class="col-md-2">
        <div class="news-aleart-icon"><span>Breaking News</span></div>
    </div>

    <div class="col-md-10">
        <div class="news-block pull-left">
            <div id="new-box">
                <dl id="ticker-1">
                    @foreach($alerts as $alert)
                    <dd> {{$alert->content}} </dd>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>

</div>
<!--news-alearts-bloc end-->




<div class="row">


    <div class="col-md-8">

        <div class="row">
            <div class="col-md-7">
                <div class="heading">
                    <h1><span>Latest News</span></h1>
                </div>

                <div class="Popular-new-block">
                    <div id="owl-master" class="owl-carousel  navigation1 owl-theme">

                        @foreach($sliders as $slider )

                            <div class="item">
                                
                            <a href="/read/{{$slider->id}}"><img src="/uploads/articles/{{$slider->file_url}}"/></a>
                                <h2>  <a href="/read/{{$slider->id}}">{{$slider->title}}</a>  </h2>
                                <p>{{ str_limit( strip_tags($slider->body),100)  }}</p>
                            </div>

                        @endforeach

                    </div>
                </div>


            </div>

            <div class="col-md-5">
                <ul class="five-news-box">
                    @foreach($latest_articles as $latest_article)
                    <li>
                        <img class="img-responsive" src="/uploads/articles/{{$latest_article->file_url}}"/>
                        <h5><a href="/read/{{$latest_article->id}}">{{$latest_article->title}}</a></h5>
                        {{--<div class="time">Aug 6, 2014</div>--}}
                        <span class="date">  {{$latest_article->created_at}}</span>
                    </li>
                     @endforeach

                </ul>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="top-add">
                    <div id="center_banner02" style="position: relative;">
                        @foreach($middle_banners as $middle_banner)
                            <a target="_blank" href="{{$middle_banner->link}}"><img class="img-responsive"  src="/uploads/articles/{{$middle_banner->file_url}}" >
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            @foreach($categories as $category)

            <div class="col-md-6">
                <!--categorynews-block Start-->
                <div class="heading">
                    <h1><span>{{$category->name}}</span></h1>
                </div>

                <?php $articles = $category->articles()->orderby('id','DSC')->get() ?>

                <div class="news-category margin-15 ">
                    <img  src="/uploads/articles/{{$articles[0]->file_url}}">
                    <h2><a href="/read/{{$articles[0]->id}}">{{$articles[0]->title}}</a></h2>
                    <p>{{ str_limit( strip_tags($articles[0]->body),100)  }}....</p>

                    <div class="news-list">
                        <ul>

                            @foreach($articles->slice(1, 4) as $article)

                                <li><a href="/read/{{$article->id}}"> <img src="/uploads/articles/{{$article->file_url}}"> {{$article->title}} </a></li>

                            @endforeach

                        </ul>
                    </div>
                    <div class="text-center"><a href="/articles/{{$category->id}}" class="btn btn-primary btn-sm view-more">और देखें</a></div>
                </div>
                <!--categorynews-block end-->
            </div>

@endforeach



        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="top-add">
                    <div id="center_banner2" style="position: relative;">
                        @foreach($footer_banners as $footer_banner)
                            <a target="_blank" href="{{$footer_banner->link}}"><img class="img-responsive"  src="/uploads/articles/{{$footer_banner->file_url}}" >
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="col-md-4">
        <!--rightside-block start-->
        @include('site.sidebar')
                <!--rightside-block end-->
    </div>



</div>



@include('site.footer')
