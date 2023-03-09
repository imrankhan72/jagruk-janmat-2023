@extends('layouts.admin')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        </div>
    @endif

    <h2 class="sub-header">Add Alerts</h2>

    {{ Form::open(array('route' => 'alerts/store', 'class'=>'form-horizontal','role'=>'form')) }}
    <div class="form-group">
        <label for="name" class="col-sm-1 control-label">Content</label>
        <div class="col-sm-11">
            <textarea cols="80" id="description"  rows="5" name="content"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Add Alert</button>
        </div>
    </div>
    </form>



@stop