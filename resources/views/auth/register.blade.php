@extends('frontend.default')
@section('title', 'Registrasi')

@section('content')
    <div class="container py-5" style="height:100vh">
        <div class="d-flex flex-column align-items-center">
            <h2 class="text-capitalize text-center mb-2">Registrasi</h2>
            <form class="w-50" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row mb-3 mb-3">
                    <div class="col d-flex align-items-center">
                        <i class="bi bi-person-circle fs-2 me-2"></i>
                        <div class="w-100 position-relative">
                            <input class="form-control h-full" id="first_name" name="name" autocomplete="off"
                                placeholder="Your Name" value="{{ old('name') }}">
                            @error('name')
                                <span class="register text-danger position-absolute top-100"
                                    data-error="{{ $message }}">{{ $message }}</span>
                            @enderror()
                        </div>
                    </div>

                </div>

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

                <div class="row mb-3">
                    <div class="col d-flex align-items-center">
                        <i class="bi bi-book-half  me-2 fs-2"></i>
                        <div class="position-relative w-100">
                            <input class="form-control" id="nisn" name="nisn" maxlength="10" autocomplete="off"
                                placeholder="nomor induk siswa nasional" type="number" value="{{ old('nisn') }}">
                            @error('nisn')
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

                <div class="row mb-3">
                    <div class="col d-flex align-items-center">
                        <i class="bi bi-lock-fill me-2 fs-2"></i>
                        <div class="position-relative w-100">
                            <input class="form-control" id="password_confirmation" placeholder="Confirm Password"
                                name="password_confirmation" autocomplete="off" type="password">
                            @error('password_confirmation')
                                <span class="text-danger position-absoulte top-100">{{ $message }}hai</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="w-25 btn btn-primary text-light">Kirim</button>
                </div>
            </form>
        </div>
    </div>
@endsection
