@include('site.header')


<div class="row content-block">
   <div class="col-md-8">
<p></p>
   <span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_whatsapp_hcount' displayText='WhatsApp'></span>
<span class='st_email_hcount' displayText='Email'></span>
      
      <div class="news-detail-block">

@if(Session::has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          {{ Session::get('message') }}
        </div>
        @endif
        


        {{--<meta property="og:description" content="{{$article->body}}" />--}}

    <h2>{{$article->title}}</h2>
     <span class="date"><i class="fa fa-calendar"></i> {{$article->created_at}}</span>
       @if($article->file_url !="na.jpg" )
        <img src="http://jagrukjanmat.com/uploads/articles/{{$article->file_url}}">
       @endif

      
       <p> {{$article->body}}</p>


      </div>


         <!-- comment-block start -->
         @include('site.comments')
         <!-- comment-block end -->
               

      </div>





        <div class="col-md-4">
           <!--rightside-block start-->
            @include('site.sidebar')
          <!--rightside-block end--> 
        </div>


</div>

@section('footer_scripts')
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">
    stLight.options({publisher: "05d4d8d2-93be-4ad6-99e9-70cf42047ee0", doNotHash: true, doNotCopy: false, hashAddressBar: });
</script>
@stop
@include('site.footer')