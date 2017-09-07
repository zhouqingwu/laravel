@extends('blog.master') 
@section('content')

<div class="col-sm-8 blog-main">
	<h1>Create a Post</h1>
	<hr>
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="title" class="col-sm-2 form-control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" id="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="form-group row">
            <label for="body" class="col-sm-2 form-control-label">Body</label>
            <div class="col-sm-10">
                <textarea name="body" id="body" class="form-control" placeholder="Body"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </div>
    </form>
</div>

@stop