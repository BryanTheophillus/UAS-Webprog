@extends('template.master')
@section('title', __('mesages.UpdateRole'))

@section('content')


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                <form action="/UpdateRole/{{$Account->id}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="Role" class="form-label">{{ __('mesages.form.Role') }}</label>
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example" id="Role" name="Role">
                                <option selected value={{$Account->role_id}}>{{$Account->role->role_name}}</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->role_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <button id="regis" type="submit"
                                class="btn w-100 fw-bold mt-5">{{ __('mesages.form.Submit') }}</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
{{-- Bryan Theophillus - 2401953966 --}}
