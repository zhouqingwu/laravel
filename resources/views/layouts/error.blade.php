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