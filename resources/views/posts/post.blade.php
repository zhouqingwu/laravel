@extends('blog.master') 
@section('content')
<div class="col-sm-8 blog-main">
    @include('posts.article')
    <div class="card">
    	@include('blog.error')
        <form action="/posts/{{ $post->id }}/discuss" method="POST" class="form-horizontal" id="commentForm" role="form">
        	{{ csrf_field() }}
            <div class="form-group">
                <label for="body" class="col-sm-8 control-label">Add Discuss</label>
                <div class="col-sm-12">
                    <textarea class="form-control" name="body" id="body" rows="5" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-primary btn-circle" type="submit" id="submitComment">
                    Add discuss
                    </button>
                </div>
            </div>
        </form>
    </div>    
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
</div>
<!-- /.blog-main -->

@stop