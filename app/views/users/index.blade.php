@extends('layouts.admin')


@section('content')

    <h2 class="sub-header">Editors: ({{ $users->count()}})</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>User name</th>
                <th>Email ID</th>
                <th>Articles count</th>
                <th>Status</th>
                <th>Edit</th>

            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>

            @foreach($users as $user)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->articles->count()}}</td>
                    <td>{{$user->status}}</td>
                    <td><a href="pages/{{$user->id}}/edit">Edit </a></td>
            @endforeach

            </tbody>
        </table>
    </div>

@stop