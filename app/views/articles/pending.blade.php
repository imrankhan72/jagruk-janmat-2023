@extends('layouts.admin')


@section('content')

    <h2 class="sub-header">Pending Articles: ({{ $articles->count()}})</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Submitted by</th>
                <th>Author</th>
                <th>Publish</th>
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
                    <td><a href="/admin/articles/{{$article->id}}/publish_article" class="btn btn-info">Publish </a></td>
                    <td><a href="/admin/articles/{{$article->id}}/edit" class="btn btn-info">Edit </a></td>
                    <td><a href="/admin/articles/{{$article->id}}/delete" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger">Delete</a></td>
            @endforeach

            </tbody>
        </table>
    </div>

@stop