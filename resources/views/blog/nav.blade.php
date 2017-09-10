<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="/posts">Post</a>
            <a class="nav-link" href="#">Press</a>
            @if(Auth::check())
            <a class="nav-link ml-auto" href="#">{{ auth()->user()->name }}</a>
            <a class="nav-link" href="/logout">Logout</a>
            @else
            <a class="nav-link ml-auto" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>            
            @endif
        </nav>
    </div>
</div>