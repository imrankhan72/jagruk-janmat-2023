@extends('layouts.admin')


@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
      </div>  
@endif  

<h2 class="sub-header">Add new Slider</h2>

<form class="form-horizontal" role="form" method="post" action="/admin/sliders/store" enctype="multipart/form-data">

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Photo</label>
    <div class="col-sm-11">
      <input type="file" class="form-control" name="image_url" >
    </div>
  </div>

   <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Caption</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="caption" placeholder="Add photo caption" >
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">News Link</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="link" placeholder="Add news link" >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Add Slider news</button>
    </div>
  </div>
</form>
  
      

@stop