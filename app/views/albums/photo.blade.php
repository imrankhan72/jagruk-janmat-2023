@extends('layouts.admin')


@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
      </div>  
@endif  

<h2 class="sub-header">Add new Cartoon </h2>

<form class="form-horizontal" role="form" method="post" action="/admin/albums/doaddPhoto" enctype="multipart/form-data">

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">New Photo</label>
    <div class="col-sm-11">
      <input type="file" class="form-control" name="image_url" >
      <input type="hidden"  name="album_id" value="{{$album->id}}" >
    </div>
  </div>

   <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Caption</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="caption" placeholder="Add photo caption" >
    </div>
  </div

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Add Photo</button>
    </div>
  </div>
</form>

<div class="row">
<div class="col-sm-offset-2 col-sm-10">
  <table class="table table-striped">
<tr>
  <th>Photo</th>
  <th>Caption</th>
  <th>Delete</th>
  </tr>
  @foreach ($photos as $photo) 
<tr>
  <td><img height="100px" width="100px"  src="/uploads/images/thumbs/{{$photo->image_url}}"/></td>
  <td>{{$photo->caption}}</td>
  <td><a href="/admin/albums/{{$photo->id}}/delete" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
</tr>
  @endforeach 
</table>
</div>
</div>




      
      

@stop