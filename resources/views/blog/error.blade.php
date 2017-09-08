@if (count($errors))
<div class="alert alert-danger">
    <div class="alert-title">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif