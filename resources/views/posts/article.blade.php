
@if($post->created_at)
<div class="blog-post">
    <h2 class="blog-post-title">
    <a href="/posts/{{ $post->id }}">
    	{{ $post->title }}    	
    </a>
    </h2>
    <p class="blog-post-meta">
        @if(isset($post->user->name))
        {{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->name }}</a>
        @endif
    </p>

    <div class="blog-post-meta">
        @if(isset($post->tags))
            @foreach($post->tags as $tag)       
                <a href="/posts/tags/{{ $tag->name }}">
                    <span class="badge badge-info">{{ $tag->name }}</span>
                </a>                
            @endforeach         
        @endif
    </div>
    <br>

    {{ $post->body }}
    <hr>
    <div class="comments">
        <ul class="list-group">
            @foreach ($post->discusses as $discuss)
            <li class="list-group-item">
                <span class="label label-default label-pill pull-right">
                    <strong>{{ $discuss->created_at->diffForHumans() }}</strong>
                </span>
                <i>{{ $discuss->body }}</i>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- /.blog-post -->
@endif