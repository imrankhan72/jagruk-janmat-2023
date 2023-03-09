@extends('layouts.admin')


@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
      </div>  
@endif  

<h2 class="sub-header">Add new category</h2>

 {{ Form::open(array('route' => 'categories/update', 'class'=>'form-horizontal','role'=>'form')) }}
 <input type="hidden" name="category_id" value="{{$category->id}}">
  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Name</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="name" value="{{$category->name}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Update Category</button>
    </div>
  </div>
</form>
        
      

@stop