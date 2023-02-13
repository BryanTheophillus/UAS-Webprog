@extends('template.master')
@section('title', __('mesages.Profile'))

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <form action="/Updates" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
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

                        <div class="col-md-12">
                            <center>
                                <img class="img-fluid rounded-circle" src= "{{Storage::url($account->display_picture_link)}}" id ="dp">
                            </center>
                        </div>

                        <div class="col-md-6">
                            <label for="FirstName" class="form-label">{{ __('mesages.form.FirstName') }}</label>
                            <input type="text" class="form-control" id="FName" name="FirstName" value="{{$account->first_name}}">
                        </div>
                        <div class="col-md-6">
                            <label for="LastName" class="form-label">{{ __('mesages.form.LastName') }}</label>
                            <input type="text" class="form-control" id="LName" name="LastName"value="{{$account->last_name}}" >
                        </div>
                        <div class="col-md-6">
                            <label for="Email" class="form-label">{{ __('mesages.form.Email') }}</label>
                            <input type="email" class="form-control" id="Email" name="Email" value="{{$account->email}}">
                        </div>
                        <div class="col-md-6">
                            <label for="Role" class="form-label">{{ __('mesages.form.Role') }}</label>
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example" id="Role" name="Role">
                                    <option id="Role" name="Role" selected value="{{$account->role_id}}">{{$account->role->role_name}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="Gender_id" class="form-label">{{ __('mesages.form.Gender') }}</label>
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example" id="gender" name="gender">
                                    <option  selected value="{{$account->gender_id}}">{{$account->gender->gender_desc}}</option>
                                    @foreach ($genders as $gender)
                                        <option  value="{{ $gender->id }}"  >{{ $gender->gender_desc}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="DisplayPicture" class="form-label">{{ __('mesages.form.DisplayPicture') }}</label>
                            <input class="form-control" id="DisplayPicture" type="file" name="DisplayPicture"  />
                        </div>
                        <?php

                        ?>
                        <div class="col-md-6">
                            <label for="password" class="form-label">{{ __('mesages.form.Password') }}</label>
                            <input for="password" type="password" class="form-control" id="password" name="password" >
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation"
                                class="form-label">{{ __('mesages.form.ComfirmPassword') }}</label>
                            <input for="password_confirmation" type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <button id= "regis" type="submit" class="btn w-100 fw-bold mt-2">{{ __('mesages.form.Update') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
{{-- Bryan Theophillus - 2401953966 --}}
