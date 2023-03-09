@extends('layouts.admin')


@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
      </div>  
@endif  

<h2 class="sub-header">Add new Sub-category</h2>

 {{ Form::open(array('route' => 'subcategories/store', 'class'=>'form-horizontal','role'=>'form')) }}

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Name</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="name" placeholder="Category name" required>
    </div>
  </div>

<div class="form-group">
    <label for="category_id" class="col-sm-1 control-label">Category</label>
    <div class="col-sm-11">
      {{ Form::select('category_id',$categories, null, array('class'=>'form-control')) }}
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Add Sub-Category</button>
    </div>
  </div>
</form>
        
  @stop    