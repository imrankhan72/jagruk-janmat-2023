@extends('layouts.admin')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        </div>
    @endif

    <h2 class="sub-header">Edit Article</h2>

    {{-- tab start --}}

    <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#article_details" aria-controls="article_details" role="tab" data-toggle="tab">Article Details</a></li>
    <li role="presentation"><a href="#article_categories" aria-controls="article_categories" role="tab" data-toggle="tab">Categories</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="article_details">

    {{ Form::open(array('route' => 'articles/update','class'=>'form-horizontal','role'=>'form','files' => true)) }}

    <p></p>

    <input type="hidden"  name="article_id" value="{{$article->id}}">


    <div class="form-group">
        <label for="title" class="col-sm-1 control-label">Title</label>
        <div class="col-sm-11">
            <input type="text" class="form-control" name="title" value="{{$article->title}}">
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-sm-1 control-label">Content</label>
        <div class="col-sm-11">
            <textarea class="ckeditor" cols="80" id="editor1"  rows="10" name="body">{{$article->body}}</textarea>
        </div>
    </div>

   
    <div class="form-group">
        <label for="link" class="col-sm-1 control-label">Attachment</label>
        <div class="col-sm-4">
            <input type="file" class="form-control"  name="file_url" placeholder="PDF file">
        </div>
         <div class="col-sm-4">
            @if($article->file_url !="na.jpg")
                <img height="100px" width="100px" src="/uploads/articles/{{$article->file_url}}">
            @endif
        </div>
    </div>


    <div class="radio">
        <label>
            <input type="radio" name="status"  value="0" checked>
            Save as Draft
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="status"  value="1">
            Publish
        </label>
    </div>

      </div>
    <div role="tabpanel" class="tab-pane" id="article_categories">

    @foreach($categories as $category)

    <div class="checkbox">
    <label>
      <input type="checkbox" name="categories[]"  value="{{$category->id}}" > {{$category->name}}
    </label>
  </div>

    @endforeach

    </div>
  </div>

</div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Edit Article</button>
        </div>
    </div>
    </form>



@stop


@section('footer')
    <script>
    
        var countChecked = function() {
  var n = $( "input:checked" ).length; //n now contains the number of checked elements.
  $( "#count" ).text( n + (n === 1 ? " is" : " zijn") + " aangevinkt!" ); //show some text
  if(n == 0){
    $("#maak_deel:visible").fadeOut(); //if there are none checked, hide only visible elements
  } else {
    $("#maak_deel:hidden").fadeIn(); //otherwise (some are selected) fadeIn - if the div is hidden.
  }

};
countChecked();

$( "input[type=checkbox]" ).on( "click", countChecked );

    </script>






@stop