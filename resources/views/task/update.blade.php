@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text text-center badge-secondary pt-3 pb-3 m-0">Update task</h2>
        <div class="container p-3" style="background-color:rgb(240, 240, 240)">
            <div class="border badge-light rounded h5 d-flex flex-row justify-content-between p-4 align-items-center"
                alt="75x75">
                <form action="{{ route('taskUpdate', $task) }}" class="w-100" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name of task</label>
                        <input type="name" placeholder="Write name ..." class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $task->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Text:</label>
                        <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" placeholder="Write some text ...">{{ $task->body }}</textarea>
                        @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
