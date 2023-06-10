@extends('frontend.default')
@section('title', 'Login')

@section('content')
    <div class="container py-5">
        @if (session('alert'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('alert') }}
            </div>
        @endif
        <div class="d-flex align-items-center  flex-column">
            <h2 class="center mb-4">Form Login</h2>
            <form class="w-50" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col d-flex align-items-center">
                        <i class="bi bi-envelope-at-fill me-2 fs-2"></i>
                        <div class="position-relative w-100">
                            <input class="form-control" id="email" name="email" autocomplete="off"
                                placeholder="sma1.blega@gmail.com" type="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="position-absolute top-100 register text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class=" row mb-3">
                    <div class="col d-flex align-items-center">
                        <i class="bi bi-lock-fill me-2 fs-2"></i>
                        <div class="position-relative w-100">
                            <input class="form-control" id="password" name="password" type="password"
                                placeholder="Password" class="@error('password') invalid @enderror">
                            @error('password')
                                <span class="position-absolute top-100 register text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex flex-column  align-items-end text-capitalize">
                    <button type="submit" class="w-25 btn btn-primary text-light m-2">Masuk</button>
                    <a href="{{ route('password.request') }}" class="">Forgot your Password?</a>
                </div>
            </form>
        </div>

        {{-- <div class="row">
            <form class="col s12 offset-m2 m8" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" autocomplete="off" name="email" type="email"
                            class="@error('email') invalid @enderror" value="{{ old('email') }}">
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
                <button type="submit" class="waves-effect waves-light btn teal lighten-2">Masuk</button>
            </form>
        </div> --}}
    </div>
@endsection
