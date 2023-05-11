@extends('frontend.default')
@section('title','Login')

@section('content')
<div class="container">
    @if (session('alert'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('alert') }}
    </div>
    @endif
    <h4 class="center">Form Login</h4>
    <div class="row">
        <form class="col s12 offset-m2 m8" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" autocomplete="off" name="email" type="email" class="@error('email') invalid @enderror" value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror()
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input name="password" id="password" type="password" class="@error('password') invalid @enderror">
                    <label for="password">Password</label>
                    @error('password')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror()
                </div>
            </div>
            <a href="{{ route('password.request') }}" class="right">Forgot Your Password?</a>
            <button type="submit" class="waves-effect waves-light btn teal lighten-2">Login</button>
        </form>
    </div>
</div>
@endsection