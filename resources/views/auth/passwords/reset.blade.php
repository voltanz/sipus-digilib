@extends('frontend.default')

@section('content')
    <div class="container py-5" style="height:100vh">
        <div class="d-flex flex-column align-items-center">
            <h2 class="text-capitalize text-center mb-2">{{ __('Reset Password') }}</h2>

            <form class="w-50" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <label for="email"><i class="bi bi-envelope-at-fill me-2 fs-2"></i></label>
                        <div class="w-100 position-relative">
                            <input id="email" type="email" class="form-control" name="email"
                                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="text-danger position-absolute top-100 register" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>



                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <label for="password"><i class="bi bi-lock-fill me-2 fs-2"></i></label>
                        <div class="w-100 position-relative">
                            <input id="password" type="password" class="form-control" name="password" required
                                autocomplete="new-password" placeholder="new password">
                            @error('password')
                                <span class="text-danger position-absolute top-100 register" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <label for="password-confirm"><i class="bi bi-lock-fill me-2 fs-2"></i></label>
                        <div class="position-relative w-100">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" placeholder="confirm new password">
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="w-25 btn btn-primary text-light">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
