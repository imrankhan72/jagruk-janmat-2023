
@include('site.header')
{{--Body begins--}}
<!-- master-start-->

<div class="row">


    <div class="col-md-8">
        <h2 class="title-heading"><span><i class="fa fa-search-plus"></i> Resources</span></h2>
         
        <!-- Articles-block -->
        @foreach ($resources as $resource)
            <div class="latest-articles-block">
            <p>{{$resource->title}}</p>
            <i><p>{{$resource->description}}</p> </i>
                           
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