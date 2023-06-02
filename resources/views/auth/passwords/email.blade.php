@extends('frontend.default')

@section('content')
    <div class="container py-5" style="height: 100vh">
        <div class="d-flex flex-column align-items-center">
            <h2 class="text-capitalize text-center mb-2">reset password</h2>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" class="w-50" action="{{ route('password.email') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col d-flex align-items-center">
                        <label for="email">
                            <i class="bi bi-envelope-at-fill me-2 fs-2"></i>
                        </label>
                        <div class="position-relative w-100">
                            <input id="email" type="email" class="form-control "name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="position-absolute top-100 register text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary w-25 text-light text-capitalize">
                        {{ __('send reset link  ') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
