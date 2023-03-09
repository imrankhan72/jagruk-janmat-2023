<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jagruk Janmat</title>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/site_assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="/site_assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/site_assets/css/yellow.css" rel="stylesheet" type="text/css"/>

    <link href="/site_assets/css/owl.carousel.css" rel="stylesheet" type="text/css"/>


    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

    <meta property="og:site_name" content="Tapas Kranti"/>
    <meta property="og:title" content="{{$article->title}}" />
    @if($article->file_url !="na.jpg" )
        <meta property="og:image" content="http://jagrukjanmat.com/uploads/articles/{{$article->file_url}}" />
    @else
        <meta property="og:image" content="http://jagrukjanmat.com/uploads/articles/na.jpg" />
    @endif

    {{--{{Route::input('id')}}--}}


    <link rel="stylesheet" type="text/css" href="/site_assets/fancybox/jquery.fancybox.css?v=2.1.5" media="screen"/>
    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="/site_assets/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5"/>

<style>
.stButton .stFb, .stButton .stTwbutton, .stButton .stMainServices {
    height: 28px !important;
}

.stHBubble {
    height: 22px !important;
}
</style>


</head>

<body>

<div class="container-fixed">

    <div class="row time-block">

        <div class="col-md-3">
            <div class="timer">{{date('l, jS F Y ')}}</div>
        </div>


        <div class="col-md-2">
            <ul class="top-social-media pull-right">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>


        <div class="col-md-7">
            <ul class="top-link pull-right">
                <li><a href="/">Home</a></li>|
                @foreach($pages as $page)
                    <li><a href="/pages/{{$page->name}}">{{$page->title}}</a></li>|
                @endforeach
            </ul>
        </div>


    </div>

    <!--header wrapper Start-->
    <div class="row header-block">

        <div class="col-md-3">
            <div class="logo">
                <a href="/"><img class="img-responsive" src="/site_assets/images/logo.png"></a>
            </div>
        </div>

        <div class="col-md-7">
            <div class="top-add ">
                <div id="top_banner">

                    @foreach($top_banners as $top_banner)
                        <a target="_blank" href="{{$top_banner->link}}"><img class="img-responsive"  src="/uploads/articles/{{$top_banner->file_url}}" >
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
        
        <div class="col-md-2"> </div>
        

    </div>
    <!--header wrapper end-->


    <div class="row">
        <div class="top-nav">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li><a href="/">होम</a></li>

                        @foreach($categories as $category)

                            @if($category->subcategories->count() > 0 )


                                <li class="dropdown"><a  href="/articles/{{$category->id}}">{{$category->name}}<span class="caret"></span></a>

                                    <ul class="dropdown-menu" role="menu">

                                        @foreach($category->subcategories as $subcategory)
                                            <li><a href="/subarticles/{{$subcategory->id}}">{{$subcategory->name}} </a></li>
                                        @endforeach

                                    </ul>

                                </li>

                            @else

                                <li ><a  href="/articles/{{$category->id}}">{{$category->name}}</a></li>


                            @endif

                        @endforeach



                        {{-- <li><a href="/gallery">Photo Gallery</a></li> --}}
                        {{-- <li><a href="/videos">Video Gallery</a></li> --}}


                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>




