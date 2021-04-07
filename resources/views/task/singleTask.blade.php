@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text text-center badge-secondary pt-2 pb-2 m-0">Tasks</h1>
        <div class="container p-4" style="background-color:rgb(240, 240, 240); height:300px">
            <h2 class="p-3 m-0 text-center badge-light border-bottom">{{ $task->name }}</h2>
            <p style="font-size:20px; min-height:80px;" class="badge-light p-2 text-center">{{ $task->body }}</p>
            <div class="float-right">
                <a href="{{ route('taskUpdate', $task) }}" class="btn btn-primary">Update</a>
                <a href="{{ route('taskCompleted', $task) }}" class="btn btn-success">Completed</a>
            </div>
        </div>
    </div>
@endsection
