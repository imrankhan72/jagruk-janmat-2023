
@include('site.header')
{{--Body begins--}}
<!-- master-start-->

<div class="row content-block">
   <div class="col-md-8">

   

   @foreach($articles as $article)

   <div class="news-category-block">
       <p> <img src="/uploads/articles/{{$article->file_url}}"></p>
       <h2><a href="/read/{{$article->id}}">{{$article->title}}</a></h2>
       <p>{{ str_limit( strip_tags($article->body),300)  }}</p>
       <div class="text-right"><a href="/read/{{$article->id}}" class="btn btn-primary read-more">और देखें</a></div>
   </div>

   @endforeach


       {{$articles->links() }}
    
    
   </div>

      <div class="col-md-4">
       <!--rightside-block start-->
            @include('site.sidebar')
       <!--rightside-block end--> 
      </div>


</div>

<!-- master-end-->
{{--Body ends--}}
@include('site.footer')