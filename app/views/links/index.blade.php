@extends('layouts.admin')


@section('content')

<h2 class="sub-header">Links: ({{ $links->count()}})</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>URL</th>
                  
                  <th>Delete</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>

              @foreach($links as $link)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{$link->name}}</td>
                  <td>{{$link->url}}</td>
                  
                  <td><a href="/admin/links/{{$link->id}}/delete" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
                  
              @endforeach

              </tbody>
            </table>
          </div>

@stop