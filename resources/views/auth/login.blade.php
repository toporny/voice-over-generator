@extends('layouts.auth-master')

@section('content')

@if(session()->has('error'))
    <div class="alert alert-danger">
        <strong>{{ session()->get('error') }}</strong>
    </div>
@endif
@if(session()->has('success'))
    <div class="alert alert-success">
        <strong>{{ session()->get('success') }}</strong>
    </div>
@endif

    <form method="post" action="{{ route('auth.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="logo-main-div">
            <div class="mb-4 logo-svg">
                <a href="/"><img src="/images/terma_logo_pure.svg"></a>
            </div>
            <div class="logo-napis">
                <p class="ms-3">{{ __('fiber_blowing_machines') }}</p>
            </div>
        </div>
        
        <h1 class="h3 mb-3 fw-normal">{{ __('login_form') }}</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">{{ __('email_or_username') }}</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">{{ __('Password') }}</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group mb-3">
            <label for="remember">{{ __('remember_me') }}</label>
            <input type="checkbox" name="remember" value="1">
        </div>

        <button class="w-100 mb-4 btn btn-lg btn-danger" type="submit">{{ __('Login') }}</button>

        <p><a href="/remindpassword" >{{ __('remind_password') }}</a></p>
        <p><a href="/" >{{ __('back') }}</a></p>
        
        @include('auth.partials.copy')
    </form>
@endsection
