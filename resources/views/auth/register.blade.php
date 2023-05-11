@extends('frontend.default')
@section('title','Registrasi')
@section('content')

<div class="container">
    <h4 class="center">Form Registrasi</h4>
    <div class="row">
        <form class="col s12 offset-m2 m8" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="first_name" name="name" autocomplete="off" type="text" class="@error('name') invalid @enderror" value="{{ old('name') }}">
                    <label for="first_name">Nama Lengkap</label>
                    @error('name')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror()
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="email" autocomplete="off" class="@error('email') invalid @enderror" value="{{ old('email') }}">
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
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input name="password_confirmation" id="password_confirmation" type="password" class="validate">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    @error('password_confirmation')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror()
                </div>
            </div>
            <button type="submit" class="waves-effect waves-light btn teal lighten-2 right">Register</button>
        </form>
    </div>
</div>
@endsection