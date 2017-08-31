@extends('layouts.master')

@section('content')
	<h1>Tasks Details</h1>
	<div class="card" style="width: 20rem;">
	  <div class="card-body">
	    <h4 class="card-title">Details</h4>
	    <h5>
	    	@if($task->completed == 1)
	    	<span class="badge badge-pill badge-success">Completed</span>
	    	@elseif($task->completed == 0)
			<span class="badge badge-pill badge-danger">Not Completed</span>
	    	@endif
	    </h5>
		<ul class="list-group list-group-flush">
			<li class="list-group-item">{{ $task->completed }}</li>
			<li class="list-group-item">{{ $task->body }}</li>
			<li class="list-group-item">{{ $task->created_at->toDayDateTimeString() }}</li>
			<li class="list-group-item">{{ $task->updated_at->diffForHumans() }}</li>
		</ul>
		<p>
		    <a href="/tasks" class="card-link">All</a>
		    <a href="/tasks/create" class="card-link">Add new</a>
	    </p>	
	  </div>
	</div>    
@endsection