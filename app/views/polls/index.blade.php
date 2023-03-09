@extends('layouts.admin')


@section('content')

<h2 class="sub-header">Polls: ({{ $polls->count()}})</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Question</th>
                  <th>Choice 1</th>
                  <th>Choice 2</th>
                  <th>Choice 3</th>
                  
                  <th>Delete</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>

              @foreach($polls as $poll)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{$poll->question}}</td>
                  <td>{{$poll->answer1}}</td>
                  <td>{{$poll->answer2}}</td>
                  <td>{{$poll->answer3}}</td>
                  
                  <td><a href="/admin/polls/{{$poll->id}}/delete" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
                  
              @endforeach

              </tbody>
            </table>
          </div>

@stop