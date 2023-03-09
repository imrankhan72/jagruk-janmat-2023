
@include('site.header')
{{--Body begins--}}
<!-- master-start-->

<div class="row">


    <div class="col-md-8">
        <h2 class="title-heading">{{$page->title}}</h2>
     <hr/>
 <p>
            {{$page->content}}
        </p>




    </div>

    <!-- right-side-bar -->
  {{--   @include('site.sidebar') --}}
    <!-- right-side-bar -->

</div>

<!-- master-end-->
{{--Body ends--}}
@include('site.footer')