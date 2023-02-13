@extends('template.master')
@section('title', __('mesages.Logout'))

@section('content')

    <div class="container1">
        <div class="circle aos-item" data-aos="zoom-in" data-aos-duration="1000">
            <div class="row">
                <div class="col-12">
                    <p class="text mt-3">{{ __('mesages.Logouts') }}</p>
                </div>
                <center>
                    <div class="col-12">
                        <a href="/">{{__('mesages.back')}}</a>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
@endsection
{{-- Bryan Theophillus - 2401953966 --}}
