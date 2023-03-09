@extends('layouts.admin')


@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
      </div>  
@endif  

<h2 class="sub-header">Edit Video</h2>

<form class="form-horizontal" role="form" method="post" action="/admin/videos/update">

<input type="hidden"  name="video_id" value="{{$video->id}}">

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Link</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="link" value="{{$video->link}}">
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Caption</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="caption" value="{{$video->caption}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Edit Video</button>
    </div>
  </div>
</form>
        
      

@stop