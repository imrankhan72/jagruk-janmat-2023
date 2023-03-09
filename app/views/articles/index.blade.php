@extends('layouts.admin')


@section('content')

    <h2 class="sub-header">My Articles: ({{ $articles_count}})</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>

            @foreach($articles as $article)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$article->title}}</td>
                    
                    @if($article->status ==0)
                    <td><span class="badge  progress-bar-warning">Draft</span></td>
                    @else($article->status ==1)
                        <td><span class="badge progress-bar-success">Published</span></td>
                    
                    @endif
                    
                    <td><a href="articles/{{$article->id}}/edit" class="btn btn-info">Edit </a></td>
                    <td><a href="articles/{{$article->id}}/delete" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger">Delete</a></td>
            @endforeach

            </tbody>
        </table>
    </div>

    <nav class="text-center">
       {{$articles->links();}}
    </nav>
@stop