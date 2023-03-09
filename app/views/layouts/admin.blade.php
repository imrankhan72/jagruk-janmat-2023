
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>{{ Siteinfo::find(1)->name }}</title>
  {{ HTML::style('assets/css/bootstrap.min.css') }}
  {{ HTML::style('assets/css/font-awesome/css/font-awesome.css') }}
  {{ HTML::style('assets/css/dashboard.css') }}
  {{ HTML::style('assets/css/summernote.css') }}
  {{ HTML::style('assets/css/jquery-ui.css') }}
  {{ HTML::style('assets/css/custom_admin.css') }}
  
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">{{ Siteinfo::find(1)->name }}</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>{{ link_to_route('dashboard', 'Dashboard')  }}</li>
          <li>{{ link_to_route('users/change_password','Settings') }}</li>
          <li>{{ link_to_route('users/edit', Auth::user()->name) }}</li>
          <li>{{ link_to_route('logout','Logout') }}</li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar begins -->
      <div class="col-sm-3 col-md-2 sidebar">

        <ul class="nav nav-sidebar">


            <li class="active"><a href="#">Articles <span class="sr-only">(current)</span></a></li>
            <li>{{ link_to_route('articles','My Articles') }}</li>
            <li>{{ link_to_route('articles/create','New Article') }}</li>
            <li>{{ link_to_route('articles/drafts','Drafts') }}</li>


             <li class="active"><a href="#">Videos <span class="sr-only">(current)</span></a></li>
            <li>{{ link_to_route('videos','All Videos') }}</li>
            <li>{{ link_to_route('videos/create','New Video') }}</li>


            <li class="active"><a href="#">News Alerts <span class="sr-only">(current)</span></a></li>
            <li>{{ link_to_route('alerts','All alerts') }}</li>
            <li>{{ link_to_route('alerts/create','New alert') }}</li>

             <li class="active"><a href="#">Banners/Advertisements <span class="sr-only">(current)</span></a></li>
            <li>{{ link_to_route('banners','All banners/ads') }}</li>
            <li>{{ link_to_route('banners/create','New banner/ads') }}</li>

            {{--<li class="active"><a href="#">Slider News <span class="sr-only">(current)</span></a></li>--}}
            {{--<li>{{ link_to_route('sliders','Sliders') }}</li>--}}
            {{--<li>{{ link_to_route('sliders/create','New Slider news') }}</li>--}}

          
            

            <li class="active"><a href="#">Photos <span class="sr-only">(current)</span></a></li>
            <li>{{ link_to_route('albums/1/addPhoto','Photos') }}</li>

            <li class="active"><a href="#">Polls<span class="sr-only">(current)</span></a></li>
            <li>{{ link_to_route('polls','All Polls') }}</li>
            <li>{{ link_to_route('polls/create','New Poll') }}</li>

          <li class="active"><a href="#">Important Links <span class="sr-only">(current)</span></a></li>
            <li>{{ link_to_route('links','Links') }}</li>
            <li>{{ link_to_route('links/create','New Link') }}</li>

           <li class="active"><a href="#">Article Comments <span class="sr-only">(current)</span></a></li>
            <li>{{ link_to_route('comments','All Comments') }}</li>

            <li class="active"><a href="#">Article Categories <span class="sr-only">(current)</span></a></li>
            <li>{{ link_to_route('categories','All Categories') }}</li>
            <li>{{ link_to_route('categories/create','New Category') }}</li>


            <li class="active"><a href="#">Sub Categories <span class="sr-only">(current)</span></a></li>
            <li>{{ link_to_route('subcategories','All Sub-Categories') }}</li>
            <li>{{ link_to_route('subcategories/create','New Sub-Category') }}</li>


            

            <li class="active"><a href="#">Page Content <span class="sr-only">(current)</span></a></li>
            <li>{{ link_to_route('pages','All Pages') }}</li>



        </ul>




      </div>

      <!-- Sidebar ends -->
      <!-- Content Area -->
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        @if(Session::has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          {{ Session::get('message') }}
        </div>
        @endif

        @yield('content')

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  {{ HTML::script('assets/js/jquery-1.9.1.min.js')}}
  {{ HTML::script('assets/js/bootstrap.min.js') }}
  {{ HTML::script('assets/ckeditor/ckeditor.js') }}
  {{ HTML::script('assets/js/summernote.js') }}
  {{ HTML::script('assets/js/app.js')}}


  @yield('footer')
</body>
</html>
