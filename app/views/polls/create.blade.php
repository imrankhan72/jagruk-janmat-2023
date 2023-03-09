@extends('layouts.admin')


@section('content')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
      </div>  
@endif  

<h2 class="sub-header">Add new Poll</h2>

<form class="form-horizontal" role="form" method="post" action="/admin/polls/store">

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Question</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" name="question" placeholder="question" required>
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Choice1</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="answer1" placeholder="choice 1">
    </div>
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Choice2</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="answer2" placeholder="choice 2">
    </div>
  </div>


  <div class="form-group">
    <label for="name" class="col-sm-1 control-label">Choice3</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="answer3" placeholder="choice 3">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Add Poll</button>
    </div>
  </div>
</form>
        
      

@stop