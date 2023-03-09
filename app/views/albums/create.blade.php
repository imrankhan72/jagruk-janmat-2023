@extends('layouts.admin')


@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
      </div>  
@endif  

<h2 class="sub-header">Add new Album</h2>

<form class="form-horizontal" role="form" method="post" action="/admin/albums/store">

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Name</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="name" placeholder="Album name">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Add Album</button>
    </div>
  </div>
</form>
        
      

@stop