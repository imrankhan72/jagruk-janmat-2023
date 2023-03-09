@extends('layouts.admin')


@section('content')

    <h2 class="sub-header">Pages: ({{ $pages->count()}})</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>title</th>
                <th>Edit</th>

            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>

            @foreach($pages as $page)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$page->name}}</td>
                    <td>{{$page->title}}</td>
                    <td><a href="pages/{{$page->id}}/edit">Edit </a></td>
            @endforeach

            </tbody>
        </table>
    </div>

@stop