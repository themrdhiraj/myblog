@extends('layouts.app')

@section('content')
    <!-- content -->
    <div class="">
        <!-- login form -->
        <section class="login-form py-md-5 py-3">
            <div class="card card_border p-md-4">
                <div class="card-body">
                    <!-- form -->
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="login__header text-center mb-lg-5 mb-4">
                            <h3 class="login__title mb-2">{{ __('Login') }}</h3>
                        </div>
                        <div class="form-group">
                            <label for="email" class="input__label">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control login_text_field_bg input-style @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="form-group">
                            <label for="password" class="input__label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control login_text_field_bg input-style @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-check check-remember check-me-out">
                                <input class="form-check-input checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label checkmark" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                        </div>
                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                            <button type="submit" class="btn btn-primary btn-style mt-4">{{ __('Login') }}</button>
                            <p class="signup mt-4"><a href="{{ route('password.request') }}" class="signuplink">{{ __('Forgot Your Password?') }}</a></p>
                        </div>
                    </form>
                    <!-- //form -->
                </div>
            </div>
        </section>

    </div>
    <!-- //content -->

@endsection