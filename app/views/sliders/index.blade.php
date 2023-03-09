@extends('layouts.admin')


@section('content')

<h2 class="sub-header">Sliders: ({{ $sliders->count()}})</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Caption</th>
                  <th>Photo</th>
                  <th>Link</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>

              @foreach($sliders as $slider)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{$slider->caption}}</td>
                  <td>  <img src="/uploads/sliders/thumbs/{{$slider->image_url}}"> </td>
                 <td>{{$slider->link}}</td>
                  <td><a href="/admin/sliders/{{$slider->id}}/edit">Edit </a></td>
                  <td><a href="/admin/sliders/{{$slider->id}}/delete" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
                  
              @endforeach

              </tbody>
            </table>
          </div>

@stop