@extends('layouts.master') @section('content')
<h1>Tasks Details</h1>
<p>
    <a href="/tasks" class="btn btn-primary">All</a>
    <a href="/tasks/create" class="btn btn-primary">Add new</a>
</p>
<div class="card">
    <div class="card-block">
        <h4 class="card-title">Details</h4>
        <div>
            @if($task->completed == 1)
            <span class="badge badge-pill badge-success">Completed</span> @elseif($task->completed == 0)
            <span class="badge badge-pill badge-danger">Not Completed</span> @endif
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $task->completed }}</li>
            <li class="list-group-item">{{ $task->body }}</li>
            <li class="list-group-item">{{ $task->created_at->toDayDateTimeString() }}</li>
            <li class="list-group-item">{{ $task->updated_at->diffForHumans() }}</li>
        </ul>
    </div>
</div>
<div class="comments">
    <h4>Comments</h4>
    <ul class="list-group list-group-flush">
        @foreach($task->comments as $comment)
        <li class="list-group-item">
            <strong>{{ $comment->created_at->diffForHumans() }}</strong> : {{ $comment->body }}
        </li>
        @endforeach
    </ul>
</div>
<hr>
<div class="card">
	@include('layouts.error')
    <div class="card-block">
        <form method="POST" action="/tasks/{{  $task->id }}/comments">
        {{ csrf_field() }}
            <div class="form-group">
                <textarea name="body" placeholder="Your comment Here" class="form-control">
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Comment</button>
        </form>
    </div>
</div>
@endsection