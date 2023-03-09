@extends('layouts.admin')


@section('content')

    <h2 class="sub-header">Published Articles: ({{ $articles->count()}})</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Submitted by</th>
                <th>Author</th>
                <th>Published on</th>
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
                    <td>{{$article->category->name}}</td>
                    <td>{{$article->user->name}}</td>
                     <td>{{$article->author}}</td>
                    <td>{{date('d-m-y',strtotime($article->published_on))}}</td>
                    <td><a href="/editor/articles/{{$article->id}}/edit" class="btn btn-info">Edit </a></td>
                    <td><a href="/editor/articles/{{$article->id}}/delete" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger">Delete</a></td>
            @endforeach

            </tbody>
        </table>
    </div>
    <nav class="text-center">
       {{$articles->links();}}
    </nav>
@stop