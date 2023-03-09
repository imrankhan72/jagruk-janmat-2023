@extends('layouts.admin')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        </div>
    @endif

    <h2 class="sub-header">Change Password</h2>

    {{ Form::open(array('route' => 'users/change_password', 'class'=>'form-horizontal','role'=>'form','files' => true)) }}





    <div class="form-group">
        <label for="name" class="col-sm-1 control-label">Old password</label>
        <div class="col-sm-11">
            <input type="text" class="form-control" name="old_password" >
        </div>
    </div>

    <div class="form-group">
        <label for="designation" class="col-sm-1 control-label">New Password</label>
        <div class="col-sm-11">
            <input type="text" class="form-control" name="new_password">
        </div>
    </div>

    <div class="form-group">
        <label for="designation" class="col-sm-1 control-label">New Password</label>
        <div class="col-sm-11">
            <input type="text" class="form-control" name="confirm_new_password">
        </div>
    </div>




    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Change Password</button>
        </div>
    </div>
    </form>



@stop


@section('footer')






@stop