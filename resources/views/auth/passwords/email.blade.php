@extends('layouts.app')

@section('content')
<div class="register-form py-md-5 py-3">
            <div class="card card_border p-md-4">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- form -->
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="register__header text-left mb-4">
                            <h3 class="register__title mb-2"> Forgot Password</h3>
                            <p>Please enter the email address for your account. A verification code will be sent to you.
                                Once you have received the verification code, you will be able to choose a new password
                                for your account. </p>
                        </div>
                        <div class="form-group">
                            <label for="email" class="input__label">Email address</label>
                            <input name="email" type="email" class="form-control login_text_field_bg input-style @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}" autofocus autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-2">Send Recovery Password</button>
                    </form>
                    <!-- //form -->
                    <p class="backtohome mt-4"><a href="/login" class="back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back to Home </a></p>
                    <p></p>
                </div>
            </div>
        </div>
@endsection
