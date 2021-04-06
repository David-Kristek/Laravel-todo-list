@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="text text-center badge-secondary pt-2 pb-2 m-0">Tasks</h1>
    <div class="container p-5" style="background-color:rgb(240, 240, 240)">
            <div class="border badge-light rounded h5 d-flex flex-row justify-content-between pl-4 pr-4 align-items-center"
                style="height:60px" alt="75x75">
                <p class="p-3 d-inline-block m-0">{{ $task->name }}</p>
                <div>
                    <button class="btn btn-primary">View</button>
                    <a href="{{ route("taskCompleted", $task) }}" class="btn btn-success">Completed</a>
                </div>

            </div>
            <p>No tasks, <a href="{{ route('createTask') }}"> add task</a></p>
    </div>
</div>
@endsection