@extends('layouts.admin')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        </div>
    @endif

    <h2 class="sub-header">Profile</h2>

    {{ Form::open(array('route' => 'categories/store', 'class'=>'form-horizontal','role'=>'form')) }}
    <div class="form-group">
        <label for="name" class="col-sm-1 control-label">Name</label>
        <div class="col-sm-11">
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-sm-1 control-label">User Name</label>
        <div class="col-sm-11">
            <input type="text" class="form-control" name="username" value="{{$user->username}}">
        </div>
    </div>

    <div class="form-group">
        <label for="name" class="col-sm-1 control-label">Email</label>
        <div class="col-sm-11">
            <input type="email" class="form-control" name="email" placeholder="Email ID" value="{{$user->email}}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Edit Profile</button>
        </div>
    </div>
    </form>



@stop