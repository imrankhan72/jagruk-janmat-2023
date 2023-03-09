
@include('site.header')

<div class="row content-block">

    <div class="col-md-8">
        <h2  class="h2">Latest Videos</h2>
        <hr/>

       <!--photogallery-block start-->
      <div class="photogallery-block">
           <ul class="album-gallery-list">

           @foreach($videos as $video)
              <li>
              <div class="video-gallery-list">
                <?php $youtube_id = substr($video->link, strrpos($video->link, '?v=') + 3); ?>
                <iframe width="340px" height="220px" src="https://www.youtube.com/embed/{{$youtube_id}}" frameborder="0" allowfullscreen></iframe>
              </div>  
                <div class="video-caption">{{ str_limit($video->caption,75,$end = '...') }}</div>
              </li>
            @endforeach
              
         </ul>
        </div>
         <!--photogallery-block end-->

     </div>


    <div class="col-md-4">
      <!--rightside-block start-->

          @include('site.sidebar') 
          
       <!--rightside-block end-->
    </div>

</div>

@include('site.footer')