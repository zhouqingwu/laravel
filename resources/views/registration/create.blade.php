@extends('blog.master')

@section('content')
	<div class="col-sm-8">
		<h1>Register</h1>
		@include('blog.error')
		<form method="POST" action="/register">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter Nnme" required>
			</div>			
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
				<small class="text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
			</div>
			<div class="form-group">
				<label for="password">Password Confirmation</label>
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
			</div>			
			<button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>
@stop