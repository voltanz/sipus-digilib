@extends('frontend.default')
@section('title', 'Registrasi')
@section('content')

    <div class="container py-3">
        <h2 class="text-capitalize text-center mb-2">Registrasi</h2>
        <div class="d-flex justify-content-center">
            <form class="w-50" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col d-flex align-content-center">
                        <p class="regsiter mr-2">
                            <i class="bi bi-person-circle"></i>
                        </p>
                        <input class="form-control" id="first_name" name="name" autocomplete="off"
                            placeholder="your name" type="text" class="@error('name') invalid @enderror"
                            value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror()
                </div>

                <div class="row">
                    <div class="col d-flex align-content-center">
                        <p class="regsiter mr-2">
                            <i class="bi bi-envelope-at-fill"></i>
                        </p>
                        <input class="form-control" id="email" name="email" autocomplete="off"
                            placeholder="sma1.belga@gmail.com" type="email" class="@error('email') invalid @enderror"
                            value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror()
                </div>

                <div class=" row">
                    <div class="col d-flex align-content-center">
                        <p class="regsiter mr-2">
                            <i class="bi bi-lock-fill"></i>
                        </p>
                        <input class="form-control" id="password" name="password" type="password" placeholder="password"
                            class="@error('password') invalid @enderror">
                    </div>
                    @error('password')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror()
                </div>

                <div class="row">
                    <div class="col d-flex align-content-center">
                        <p class="regsiter mr-2">
                            <i class="bi bi-lock-fill"></i>
                        </p>
                        <input class="form-control" id="password_confirmation" placeholder="confrim password"
                            name="password_confirmation" autocomplete="off" type="password">
                    </div>
                    @error('password_confirmation')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror()
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="w-25 btn btn-primary">kirim</button>
                </div>
            </form>
        </div>
    </div>
@endsection
