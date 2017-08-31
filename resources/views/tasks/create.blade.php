@extends('layouts.master')

@section('content')

<h1>Add new task</h1>
<div>
	@if (count($errors))
	    @component('layouts.alert')
	        @slot('title')
	            Alert
	        @endslot
	        <ul>
	        @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
	        @endforeach
	        </ul>
	    @endcomponent
	@endif

	<form method="POST" action="/tasks" >
	{{ csrf_field() }}
	  <div class="form-group">
	    <label for="body">Task Content</label>
	    <textarea id="task_body" name="body" cols="30" rows="10" class="form-control"></textarea>
	    </div>
		<button type="submit" class="btn btn-primary">Submit</button>	    
	</form>
</div>

@stop