@extends('blog.master')

@section('content')
	<div class="col-sm-8">
		<h1>Login</h1>
		@include('blog.error')
		<form method="POST" action="/login">
			{{ csrf_field() }}		
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
			</div>		
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>
@stop