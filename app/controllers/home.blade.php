@include('site.header')
<!--news-alearts-bloc start-->
  <div class="row news-alearts-block">
   <div class="col-md-1">
     <div class="news-aleart-icon"><img src="/site_assets/images/sound-icon.png"></div>
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



  <div class="row">
 
  <div class="col-md-8">


      <div class="row">
          <div class="col-md-12">

              <div class="heading">
                  <h1><span>ताजा खबरें</span></h1>
              </div>


              <div class="features-news-block">

                  <div class="flexslider">
                      <ul class="slides">

                          @foreach($sliders as $slider )

                              <li>
                                  <img src="/uploads/sliders/{{$slider->image_url}}"/>
                                  <div class="news-deatils">
                                      <span>आज के समाचार</span>
                                      <h2>{{$slider->caption}}</h2>

                                      <a class="btn btn-primary read-more" href="{{$slider->link}}">और देखें</a>
                                  </div>
                              </li>
                          @endforeach

                      </ul>
                  </div>
              </div>



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



   <div class="col-md-6">
    <!--categorynews-block Start-->
       <div class="news-category margin-15">

           <h2>{{$categories[0]->name}}</h2>

           <div class="news-link">


               <h2>{{$articles1[0]->title}}</h2>
               <img src="/uploads/articles/{{$articles1[0]->file_url}}">
               <p>{{ str_limit( strip_tags($articles1[0]->body),100)  }}....</p>

               <ul>
                   @foreach($articles1->slice(1, 4) as $article1)

                   <li><a href="/read/{{$article1->id}}">{{$article1->title}} </a></li>

                   @endforeach
               </ul>
           </div>
           <div class="button-block"><a href="/articles/" class="btn btn-primary read-more">और देखें</a></div>
       </div>
     <!--categorynews-block end-->
  </div>

      <div class="col-md-6">
          <!--categorynews-block Start-->
          <div class="news-category margin-15">

              <h2>{{$categories[1]->name}}</h2>

              <div class="news-link">


                  <h2>{{$articles2[0]->title}}</h2>
                  <img src="/uploads/articles/{{$articles2[0]->file_url}}">
                  <p>{{ str_limit( strip_tags($articles2[0]->body),100)  }}....</p>

                  <ul>
                      @foreach($articles2->slice(1, 4) as $article2)

                          <li><a href="/read/{{$article2->id}}">{{$article2->title}} </a></li>

                      @endforeach
                  </ul>
              </div>
              <div class="button-block"><a href="/articles/" class="btn btn-primary read-more">और देखें</a></div>
          </div>
          <!--categorynews-block end-->
      </div>


  </div>



{{--Second row    --}}

  <div class="row">
    <div class="col-md-12">
     <div class="top-add">
     <div id="center_banner" style="position: relative;">
    
      @foreach($second_middle_banners as $second_middle_banner)
     <a target="_blank" href="{{$second_middle_banner->link}}"><img class="img-responsive"  src="/uploads/articles/{{$second_middle_banner->file_url}}"> </a>
      @endforeach

     </div>
     </div>
  </div>
  </div>


  <div class="row">

      <div class="col-md-6">
          <!--categorynews-block Start-->
          <div class="news-category margin-15">

              <h2>{{$categories[2]->name}}</h2>

              <div class="news-link">


                  <h2>{{$articles3[0]->title}}</h2>
                  <img src="/uploads/articles/{{$articles3[0]->file_url}}">
                  <p>{{ str_limit( strip_tags($articles3[0]->body),100)  }}....</p>

                  <ul>
                      @foreach($articles3->slice(1, 4) as $article3)

                          <li><a href="/read/{{$article3->id}}">{{$article3->title}} </a></li>

                      @endforeach
                  </ul>
              </div>
              <div class="button-block"><a href="/articles/" class="btn btn-primary read-more">और देखें</a></div>
          </div>
          <!--categorynews-block end-->
      </div>


      <div class="col-md-6">
          <!--categorynews-block Start-->
          <div class="news-category margin-15">

              <h2>{{$categories[3]->name}}</h2>

              <div class="news-link">


                  <h2>{{$articles4[0]->title}}</h2>
                  <img src="/uploads/articles/{{$articles4[0]->file_url}}">
                  <p>{{ str_limit( strip_tags($articles4[0]->body),100)  }}....</p>

                  <ul>
                      @foreach($articles4->slice(1, 4) as $article4)

                          <li><a href="/read/{{$article4->id}}">{{$article4->title}} </a></li>

                      @endforeach
                  </ul>
              </div>
              <div class="button-block"><a href="/articles/" class="btn btn-primary read-more">और देखें</a></div>
          </div>
          <!--categorynews-block end-->
      </div>



        
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



<!--gallery-block send-->
{{--Body ends--}}
@include('site.footer')
