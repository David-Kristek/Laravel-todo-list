@extends('layout.app')

@section('content')
    <form action="{{ route('loginUser') }}" method="post" class="mt-5">
        @csrf
        <h2 class="text-center">Log in</h2>

        @if (\Session::has('failed'))
            <div class="alert alert-danger">
                <p style="margin:0">{!! \Session::get('failed') !!}</p>
            </div>
        @endif
        @if ($registered == 'registered')
            <div class="alert alert-success">
                <p style="margin:0">Succesfully registered now log in.</p>
            </div>
        @endif
        <div class="form-group">
            @if (session('status'))
                <p style="color:red">{{ session('status') }}</p>
            @endif
            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email"
                value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                value="{{ old('password') }}" name="password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox" name="remember"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>
    </form>
@endsection
