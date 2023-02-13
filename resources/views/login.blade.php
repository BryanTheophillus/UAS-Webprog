@extends('template.master')
@section('title', __('mesages.Login'))

@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3">{{ __('mesages.Login') }}</h1>
                <form action="/Login" enctype="multipart/form-data" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="Email" class="form-label">{{ __('mesages.form.Email') }}</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ Cookie::get('Email_cookie') != null ? Cookie::get('Email_cookie') : '' }}">
                        </div>
                        <div class="col-md-6">
                            <label for="Password" class="form-label">{{ __('mesages.form.Password') }}</label>
                            <input for="password" type="password" class="form-control" id="password" name="password"
                                value="{{ Cookie::get('Password_cookie') != null ? Cookie::get('Password_cookie') : '' }}">
                        </div>
                        <div class="col-md-6">
                            <input name="remember" type="checkbox" id="remember"
                                checked="{{ Cookie::get('cookieEmail') != null ? 'checked' : '' }}">
                            <label class="form-check-label" for="remember">
                                {{ __('mesages.form.RememberMe') }}
                            </label>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <button id="regis" type="submit"
                                    class="btn w-100 fw-bold mt-2">{{ __('mesages.form.Submit') }}</button>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="/Register">{{ __('mesages.SignUpMsg') }}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
{{-- Bryan Theophillus - 2401953966 --}}
