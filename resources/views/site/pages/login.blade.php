@extends('site.layouts.app')
@section('title', __('messages.home'))
@section('content')
    <main class="main-container">
        <div class="section-title-container">
            <div class="section-title">
                <hr>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="session-login-form">
            <form action="{{ route('postLogin') }}" accept-charset="UTF-8" class="pt-1" method="post">
                @csrf
                <div class="form-group row  input">
                    <label for="email" class="col-md-2 col-form-label text-md-left">{{ __('front.e-Mail') }} </label>
                    <div class="col-md-4">
                        <input id="email" type="text" name="email"  required="required" autocomplete="email" autofocus="autofocus" value="{{ old('email') }}" class="form-control  @error('email') is-invalid @enderror ">
                        @error('email')
                        <span role="alert" class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row input">
                    <label for="password" class="col-md-2 col-form-label text-md-left">{{ __('front.password') }}</label>
                    <div class="col-md-4">
                        <input id="password" type="password" name="password" required="required" autocomplete="current-password" class="form-control  @error('password') is-invalid @enderror">
                        @error('password')
                        <span role="alert" class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-3 offset-md-1">
                        <button type="submit" class="btn btn-primary">
                            {{ __('front.login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
