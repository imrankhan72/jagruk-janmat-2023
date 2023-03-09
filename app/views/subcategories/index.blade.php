@extends('layouts.admin')


@section('content')

    <h2 class="sub-header">Sub-Categories: ({{ $subcategories->count()}})</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Delete</th>

            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>

            @foreach($subcategories as $subcategory)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$subcategory->name}}</td>
                    <td>{{$subcategory->category->name}}</td>
                    <td><a href="/admin/subcategories/{{$subcategory->id}}/delete" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
            @endforeach

            </tbody>
        </table>
    </div>

@stop