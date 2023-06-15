@extends('admin.template.default')
@section('title', 'Tambah User')
@section('content')
    <div class="container py-5">
        <div class="d-flex flex-column align-items-center">
            <h2 class="text-capitalize text-center mb-4">Tambah {{ $coba }}</h2>
            <form class="w-50" action="{{ route('admin.user.store') }}?select={{ $coba }}" method="POST">
                @csrf
                <div class="row mb-3 mb-3">
                    <div class="col d-flex align-items-center">
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
                        <div class="position-relative w-100">
                            <input class="form-control" id="email" name="email" autocomplete="off"
                                placeholder="sma1.blega@gmail.com" type="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="position-absolute top-100 register text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                @if ($coba === 'user')
                    <div class="row mb-3">
                        <div class="col d-flex align-items-center">
                            <div class="position-relative w-100">
                                <input class="form-control" id="nisn" name="nisn" autocomplete="off"
                                    placeholder="NISN" type="number" value="{{ old('nisn') }}" maxlength="10">
                                @error('nisn')
                                    <span class="position-absolute top-100 register text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                @endif
                <div class=" row mb-3">
                    <div class="col d-flex align-items-center">
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