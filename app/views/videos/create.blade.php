@extends('layouts.admin')


@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
      </div>  
@endif  

<h2 class="sub-header">Add new Video</h2>

<form class="form-horizontal" role="form" method="post" action="/admin/videos/store">


<div class="form-group">
    <label for="type" class="col-sm-1 control-label">Type</label>
    <div class="col-sm-11">
     <select class="form-control" name="type" >
       <option value="1">Live TV</option>
       <option value="2">Interview</option>
       <option value="3">Special Story</option>
     </select>
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Link</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="link" placeholder="Youtube link">
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Caption</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="caption" placeholder="Video Caption">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Add Video</button>
    </div>
  </div>
</form>
        
      

@stop