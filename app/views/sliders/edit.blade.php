@extends('layouts.admin')


@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
      </div>  
@endif  

<h2 class="sub-header">Edit Slider</h2>

<form class="form-horizontal" role="form" method="post" action="/admin/sliders/store" enctype="multipart/form-data">

<div class="form-group">
    <label for="old_image" class="col-sm-1 control-label">Image</label>
    <div class="col-sm-11">
      <div class="thumbnail"><img src="/uploads/sliders/thumbs/{{$slider->image_url}}"></div>
    </div>
  </div>


  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">New Photo</label>
    <div class="col-sm-11">
      <input type="file" class="form-control" name="image_url" >
    </div>
  </div>

   <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Caption</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="caption" value="{{$slider->caption}}" >
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Link</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="link" value="{{$slider->link}}" >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Update Slider</button>
    </div>
  </div>
</form>
  
      

@stop