@extends('template.master')
@section('title', __('mesages.Register'))

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3">{{ __('mesages.Register') }}</h1>
                <form action="/AddAccount" enctype="multipart/form-data" method="POST">
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
                            <label for="FirstName" class="form-label">{{ __('mesages.form.FirstName') }}</label>
                            <input type="text" class="form-control" id="FName" name="FirstName">
                        </div>
                        <div class="col-md-6">
                            <label for="LastName" class="form-label">{{ __('mesages.form.LastName') }}</label>
                            <input type="text" class="form-control" id="LName" name="LastName" >
                        </div>
                        <div class="col-md-6">
                            <label for="Email" class="form-label">{{ __('mesages.form.Email') }}</label>
                            <input type="email" class="form-control" id="Email" name="Email">
                        </div>
                        <div class="col-md-6">
                            <label for="Role" class="form-label">{{ __('mesages.form.Role') }}</label>
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example" id="Role" name="Role">
                                    <option selected>{{__('mesages.form.OpenMenu')}}</option>
                                    @foreach ($roles as $role)
                                        <option  value="{{ $role->id }}"  >{{ $role->role_name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="Gender_id" class="form-label">{{ __('mesages.form.Gender') }}</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Gender" id="gender_id"
                                    value="1">
                                <label class="form-check-label">
                                    {{ __('mesages.form.Male') }}
                                </label>

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Gender" id="gender_id"
                                    value="2">
                                <label class="form-check-label">
                                    {{ __('mesages.form.Female') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="DisplayPicture" class="form-label">{{ __('mesages.form.DisplayPicture') }}</label>
                            <input class="form-control" id="DisplayPicture" type="file" name="DisplayPicture" />
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">{{ __('mesages.form.Password') }}</label>
                            <input for="password" type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation"
                                class="form-label">{{ __('mesages.form.ComfirmPassword') }}</label>
                            <input for="password_confirmation" type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <button id= "regis" type="submit" class="btn w-100 fw-bold mt-2">{{ __('mesages.form.Submit') }}</button>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="/Login">{{ __('mesages.RegisterMsg') }}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
{{-- Bryan Theophillus - 2401953966 --}}
