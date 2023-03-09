@extends('layouts.admin')


@section('content')

    <h2 class="sub-header">Comments: ({{ $comments->count()}})</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Article</th>
                <th>Commentator</th>
                <th>Email</th>
                <th>Comment</th>
                <th>Status</th>
                <th>Delete</th>

            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>

            @foreach($comments as $comment)
                <tr>
                    <td>{{ $i++ }}.</td>
                    <td>{{$comment->article->title}}</td>
                    <td>{{$comment->name}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->comment}}</td>
                    @if($comment->status==0)
                    <td><span class="badge">Pending</span></td>
                    <td><a href="/admin/comments/{{$comment->id}}/publish_comment" class="btn btn-info">Publish</a></td>
                    @else
                        <td><span class="badge">Published</span></td>
                    @endif
                    <td><a href="comments/{{$comment->id}}/delete" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger">Delete</a></td>
            @endforeach

            </tbody>
        </table>
    </div>

@stop