@extends('layouts.back')

@section('content')
 
<div class="page">
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                <div class="text-center mb-6">
                    {{-- <img src="./assets/brand/tabler.svg" class="h-6" alt=""> --}}
                </div>

                <form method="POST" action="{{ route('login') }}" class="card">
                    @csrf
                    <div class="card-body p-6">
                        <div class="card-title">{{ __('Login to your account') }}</div>

                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required autofocus>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                            
                        <div class="form-group">
                            <label class="form-label">
                                {{ __('Password') }}
                                <a href="./forgot-password.html" class="float-right small">I forgot password</a>
                            </label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Password" name="password" required>
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                            <span class="custom-control-label">{{ __('Remember Me') }}</span>
                            </label>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Sign in') }}</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>

                <div class="text-center text-muted">
                    Don't have account yet? <a href="./register.html">Sign up</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection

