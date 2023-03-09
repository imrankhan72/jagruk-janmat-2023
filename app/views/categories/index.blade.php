@extends('layouts.admin')


@section('content')

<h2 class="sub-header">Categories: ({{ $categories->count()}})</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>

              @foreach($categories as $category)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{$category->name}}</td>
                  <td><a href="categories/{{$category->id}}/edit" class="btn btn-info">Edit </a></td>
                  <td><a href="categories/{{$category->id}}/delete" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger">Delete</a></td>
              @endforeach

              </tbody>
            </table>
          </div>

@stop