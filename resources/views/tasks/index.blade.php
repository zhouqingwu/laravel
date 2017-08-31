@extends('layouts.master') 
@section('title', 'Page Title')
@section('content')

<h1>Dashboard</h1>
<h2>Tasks List</h2>

@if (session('status'))
    @component('layouts.alert')
        @slot('title')
            Alert
        @endslot
        {{ session('status') }}
    @endcomponent
@endif


<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Body</th>
                <th>Completed</th>
                <th>Create Time</th>
                <th>Update Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>
                    <a href="/tasks/{{ $task->id }}">{{ $task->id }}</a>
                </td>
                <td>{{ $task->body }}</td>
                <td>{{ $task->completed }}</td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/tasks/create" class="button-primary">Add new</a>    
</div>
</div>
@endsection