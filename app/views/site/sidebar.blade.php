
<div class="heading2">
    <h1><span>Videos Gallery</span></h1>
</div>

<div class="live-tv-block">
    <div class="live-tv">
        <?php $youtube_id = substr($video->link, strrpos($video->link, '?v=') + 3); ?>
        <iframe width="338" height="280" src="https://www.youtube.com/embed/{{$youtube_id}}" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<div class="text-right"><a class="btn btn-primary btn-sm view-more" href="/videos">और देखें</a></div>

<div class="right-add-240 margin-15">
    <div id="right_banner1" style="position: relative;">
        @foreach($sidebar_top_ads as $sidebar_top_ads)
            <a target="_blank" href="{{$sidebar_top_ads->link}}"><img class="img-responsive"  src="/uploads/articles/{{$sidebar_top_ads->file_url}}" />
            </a>
        @endforeach
    </div>
</div>


<div class="heading2"  id ="polls">

        <h1><span>Poll of the day</span></h1>
    </div>
    <div class="poll-block">
    <div class="poll-box">
        <h2>{{$poll->question}}</h2>
        <form method="post" action ="/add_poll" id="submit_poll">

        <input type="hidden" name="poll_id" value="{{$poll->id}}">

        <div class="radio">
            <label>
                <input type="radio" name="answers"  value="answer1" checked>
                {{$poll->answer1}}
                <?php $total_answers = $poll->answer1_count + $poll->answer2_count + $poll->answer3_count ?>

            </label>
                <span id="answer1_count_container"  class="badge pull-right">
                  {{ number_format((float)$poll->answer1_count/$total_answers*100, 0, '.', '')}} %
                </span>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="answers"  value="answer2">
                {{$poll->answer2}}
            </label>

                <span id="answer2_count_container" class="badge pull-right">
                 {{ number_format((float)$poll->answer2_count/$total_answers*100, 0, '.', '')}} %
                </span>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="answers"  value="answer3">
                {{$poll->answer3}}
            </label>
                <span id="answer3_count_container" class="badge pull-right">
                 {{ number_format((float)$poll->answer3_count/$total_answers*100, 0, '.', '')}} %
                </span>
        </div>

            <div class="text-center">
                <button id="answer_poll" class="btn btn-primary btn-sm view-more">Submit</button>
                <button id="view_poll_result" class="btn btn-primary btn-sm view-more">View Result</button>
            </div>
            </form>


    </div>

</div>


<div class="right-add-240 margin-15">
    <div id="right_banner13" style="position: relative;">

        @foreach($sidebar_footer_ads as $sidebar_footer_ads)
            <a target="_blank" href="{{$sidebar_footer_ads->link}}"><img class="img-responsive"  src="/uploads/articles/{{$sidebar_footer_ads->file_url}}" >
            </a>
        @endforeach

    </div>
</div>

<div class="heading2">
    <h1><span>Photo Gallery</span></h1>
</div>
<div class="photo-gallery-block ">

    <div class="photo-block">
        @if($photo)
            <img class="img-responsive" src="/uploads/images/{{$photo->image_url}}">
            <p>{{$photo->caption}}</p>
        @endif
    </div>
</div>
<div class="text-right">
    <a href="/gallery" class="btn btn-primary btn-sm view-more">और देखें</a>
</div>


<div class="right-add-240 margin-15">
    <div id="right_banner" style="position: relative;">
        <img class="img-responsive" src="/site_assets/images/right-add02.jpg"/>
        <img class="img-responsive" src="/site_assets/images/add-banner.jpg"/>
    </div>
</div>