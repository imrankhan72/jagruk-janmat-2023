@extends('layouts.admin')


@section('content')

<h2 class="sub-header">Banners/Advts: ({{ $banners->count()}})</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>

                  <th>#</th>
                  <th>Name</th>
                  <th>File</th>
                  <th>Link</th>
                  <th>Position</th>
                  <th>From Date</th>
                  <th>Till Date</th>
                  
                  <th>Delete</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>

              @foreach($banners as $banner)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{$banner->name}}</td>
                  <td> <img height="200px" width="250px" src="/uploads/articles/{{$banner->file_url}}"> </td>
                  <td>{{$banner->link}}</td>
                  <td>{{$banner->position}}</td>
                  <td>{{$banner->from_date}}</td>
                  <td>{{$banner->till_date}}</td>
                  
                  <td><a href="/admin/banners/{{$banner->id}}/delete" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
                  
              @endforeach

              </tbody>
            </table>
          </div>

@stop