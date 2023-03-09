@include('site.header')
<!--news-alearts-bloc start-->
  <div class="row news-alearts-block">
   <div class="col-md-1">
     <div class="news-aleart-icon"><img src="/site_assets/images/sound-icon.jpg"></div>
   </div>

  <div class="col-md-11">
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
    <div class="col-md-9">
      <div class="features-news-block">
        <div class="flexslider">
        <ul class="slides">

          
          @foreach($sliders as $slider)
           <li>
          <img src="/uploads/sliders/{{$slider->image_url}}"/>
          <div class="news-deatils">
            <span>आज के समाचार</span>
            <h2>{{$slider->caption}}
           </h2>
           <a class="btn btn-primary read-more" href="{{$slider->link}}">और देखें</a>
           </div>
          </li>
          @endforeach

          
        </ul>
      </div>
      </div>
    </div>

    <div class="col-md-3">
     <!--sidenav-block Start-->
    <div class="sidenav-block margin-15">
      <h2>महत्वपूर्ण लिंक</h2>
      <div class="sidenav-link">
        <ul>
        @foreach($links as $link)
          <li><a href="{{$link->url}}" target="blank" > {{$link->name}}</a></li>
        @endforeach
       </ul>
      </div> 
       
     {{--   <div class="button-block"><button class="btn btn-primary read-more">और देखें</button></div> --}}

    </div>
   <!--sidenav-block end-->
    </div>

  </div>


  <div class="row">

@foreach($categories as $category)

   <div class="col-md-3">
    <!--categorynews-block Start-->
    <div class="sidenav-block margin-20">
      <h2>{{$category->name}}</h2>
      <div class="news-link">
        <ul>


        @foreach($category->articles->slice(0, 5) as $article)
          <li><a href="/read/{{$article->id}}">{{$article->title}}</a></li>
         @endforeach
       </ul>
      </div> 
       <div class="button-block"> <a class="btn btn-primary read-more" href="/articles/{{$category->id}}">और देखें</a>  </div>
    </div>
     <!--categorynews-block end-->
  </div>

@endforeach



</div>


<!--gallery-block start-->
<div class="row gallery-block">


 <div class="col-md-4">
     
     <h2 class="h2">महत्वपूर्ण लिंक</h2>
     <div class="sidenav-link">
       <ul>
        @foreach($links as $link)
          <li><a href="{{$link->url}}" target="blank" > {{$link->name}}</a></li>
        @endforeach
       </ul>
      </div> 

 

  </div>


<div class="col-md-4">
       <div class="photo-gallery-block">
            <h2 class="h2">फोटो गैलरी</h2>
            <ul class="gallery-list">
            
              @foreach($photos as $photo)
               <li><img title="{{$photo->caption}}"  class="img-responsive" src="/uploads/images/thumbs/{{$photo->image_url}}"/></li>
              @endforeach
             
            </ul>
       </div>
       <div class="text-right">
       <a class="btn btn-primary btn-lg view-more" href="/gallery">और देखें</a>
       </div>
  </div>


  


  <div class="col-md-4">
      <!--  <div class="redio-block">
            <h2 class="h2">रेडिओ</h2>
            <div class="redio-thum">
              <img  class="img-responsive" src="assets/images/redio-play.png"/>
            </div>
       </div> -->
         <div class="right-add-240 margin-50">
              <div id="right_banner" style="position: relative;">
               <img class="img-responsive" src="assets/images/right-add02.jpg"/>
               <img class="img-responsive" src="assets/images/add-banner.jpg"/>
              </div>
        </div>

  </div>


</div>
<!--gallery-block send-->
{{--Body ends--}}
@include('site.footer')

