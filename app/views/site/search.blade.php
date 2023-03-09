
@include('site.header')
{{--Body begins--}}
<!-- master-start-->

<div class="row">


    <div class="col-md-8">
        <h2 class="title-heading"><span><i class="fa fa-search-plus"></i> Search Results</span></h2>
          <span>You searched for "{{$search}}"</span>
        <!-- Articles-block -->
        @foreach ($articles as $article)
            <div class="latest-articles-block">
                <h2><a href="/read/{{$article->id}}">{{$article->title}}</a></h2>
                <ul class="articles-detail">
                    <li><span class="date">{{date('d-m-Y',strtotime($article->published_on))}}</span></li>
                    <li>By: {{$article->user->name}}</li>
                </ul>
                <p>{{ str_limit( strip_tags($article->body),400)  }}</p>
                <div class="comment-block">
                    <span><a class="read-more" href="/read/{{$article->id}}"><i class="fa fa-angle-double-right"></i> read more</a></span>
                    <span class="comment"><i class="fa fa-comment-o"></i>Comments <span class="badge"> {{$article->comments->count()}}</span> </span>
                </div>
            </div>

            @endforeach
                    <!-- Articles-block -->




    </div>

    <!-- right-side-bar -->
    @include('site.sidebar')
    <!-- right-side-bar -->

</div>

<!-- master-end-->
{{--Body ends--}}
@include('site.footer')