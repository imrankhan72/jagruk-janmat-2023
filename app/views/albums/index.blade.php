@extends('layouts.admin')


@section('content')

<h2 class="sub-header">All Photos: ({{ $photos->count()}})</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Caption</th>
                  <th>Image</th>
                  <th>Delete</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>

              @foreach($photos as $photo)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{$photo->caption}}</td>
                  <td> <img height="100px" width="100px" src="/uploads/images/thumbs/{{$photo->image_url}}"></td>
                  <td><a href="/admin/albums/{{$photo->id}}/delete" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
                  
              @endforeach

              </tbody>
            </table>
          </div>

@stop