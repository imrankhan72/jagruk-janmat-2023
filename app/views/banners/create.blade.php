@extends('layouts.admin')


@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
      </div>  
@endif  

<h2 class="sub-header">Add new Banner/Advertisement</h2>

<form class="form-horizontal" role="form" method="post" action="/admin/banners/store" enctype="multipart/form-data">


  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Name</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="name" placeholder="Banner Name" required>
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">File</label>
    <div class="col-sm-11">
      <input type="file" class="form-control" name="file_url" placeholder="file" required>
    </div>
  </div>

  <div class="form-group">
    <label for="category_id" class="col-sm-1 control-label">Position</label>
    <div class="col-sm-11">
     <select class="form-control" name="position">
     <option value="top-banner">Top-banner (728*90)</option>
     <option value="middle-banner">Middle-banner (728*90)</option>
     <option value="2nd-middle-banner">2nd Middle-banner (728*90)</option>
     <option value="footer-banner">footer-banner (728*90)</option>
     <option value="side-bar-top">Right Side bar top advt (380*316)</option>
     <option value="side-bar-footer">Right Side bar footer advt (380*316)</option>
     </select>
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Link</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="link" placeholder="Link">
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">From Date</label>
    <div class="col-sm-11">
      <input type="date" class="form-control" name="from_date" placeholder="url">
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Till Date</label>
    <div class="col-sm-11">
      <input type="date" class="form-control" name="till_date" placeholder="url">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Add Banner/Advt</button>
    </div>
  </div>
</form>
        
      

@stop