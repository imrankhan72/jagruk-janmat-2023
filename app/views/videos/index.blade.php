@extends('layouts.admin')


@section('content')

<h2 class="sub-header">Videos: ({{ $videos->count()}})</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Link</th>
                  <th>Caption</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>

              @foreach($videos as $video)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{$video->link}}</td>
                  <td>{{$video->caption}}</td>
                  <td><a href="/admin/videos/{{$video->id}}/edit">Edit </a></td>
                  <td><a href="/admin/videos/{{$video->id}}/delete" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
              @endforeach

              </tbody>
            </table>
          </div>

@stop