 @include('site.header') 

<div class="row content-block">
   <div class="col-md-8">

      <h2 class="h2">Photo Gallery</h2> 
       <hr/>

     <div class="photogallery-block">
       <ul class="album-gallery-list">

       @foreach($photos as $photo)

      <li
          <a class="fancybox" href="/uploads/images/{{$photo->image_url}}" 
          data-fancybox-group="gallery" title="{{$photo->caption}}">
          <img title="{{$photo->caption}}" class="img-responsive" src="/uploads/images/thumbs/{{$photo->image_url}}"/>
          </a>
          <div class="caption">{{ str_limit($photo->caption,75,$end = '...') }}</div>
      </li>

      @endforeach

     </ul>
      </div>

   </div>

    <div class="col-md-4">

      <!--rightside-block start-->
         @include('site.sidebar') 
       <!--rightside-block end-->
       
    </div>


</div>


 @include('site.footer') 


 

