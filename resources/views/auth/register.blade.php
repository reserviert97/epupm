@extends('layouts.back')

@section('title', 'Register | ePUPM')

@section('content')
<div class="page">
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <div class="text-center mb-6">
                    {{-- <img src="./assets/brand/tabler.svg" class="h-6" alt=""> --}}
                    </div>
                    <form class="card" action="{{ route('register') }}" method="post">
                    @csrf

                        <div class="card-body p-6">
                            <div class="card-title">{{ __('Register') }}</div>

                            <div class="form-group">
                                <label class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
    
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
    
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
    
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>

                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="agree" id="agree" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="custom-control-label">Saya setuju <a href="">syarat dan ketentuan</a></span>
                                </label>
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">{{ __('Create new account') }}</button>
                            </div>
                        </div>

                    </form>

                    <div class="text-center text-muted">
                        Already have account? <a href="{{ route('login') }}">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
