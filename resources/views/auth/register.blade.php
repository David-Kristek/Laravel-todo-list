@extends('layout.app')

@section('content')
    <form action="{{ route('register') }}" method="post" class="mt-5">
        @csrf
        <h2 class="text-center">Register</h2>
        <div class="form-group">
            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{old('name')}}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{old('username')}}"
                name="username">
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{old('email')}}">
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="Choose a password" name="password" value="{{old('password')}}">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                placeholder="Repeat your password" name="password_confirmation" value="{{old('password_confirmation')}}">
            @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </form>
    @endsection
