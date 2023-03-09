@extends('layouts.admin')


@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
      </div>  
@endif  

<h2 class="sub-header">Add new Link</h2>

<form class="form-horizontal" role="form" method="post" action="/admin/links/store">

{{-- <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Link type</label>
    <div class="col-sm-11">
      <select name="link_position" class="form-control">
        <option value="citizens_corner">Citizens Corner</option>
        <option value="important_links">Important links</option>
        <option value="plans_programmes">Plans & Programmes</option>
      </select>
    </div>
  </div> --}}

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Name</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="name" placeholder="Link name">
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">URL</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="url" placeholder="url">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Add Link</button>
    </div>
  </div>
</form>
        
      

@stop