@extends('layouts.admin')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        </div>
    @endif

    <h2 class="sub-header">Edit Trending now</h2>

    {{ Form::open(array('route' => 'trending/update', 'class'=>'form-horizontal','role'=>'form')) }}
    <input type="hidden" name="trending_id" value="{{$trending->id}}">
    <div class="form-group">
        <label for="name" class="col-sm-1 control-label">Content</label>
        <div class="col-sm-11">
            <textarea class="ckeditor" cols="80" id="editor1"  rows="10" name="content"  >{{$trending->content}}</textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Edit Trending now</button>
        </div>
    </div>
    </form>



@stop