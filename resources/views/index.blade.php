@extends('template.master')
@section('title', __('mesages.Home'))

@section('content')

    <div class="container1">
        <div class="circle aos-item" data-aos="zoom-in" data-aos-duration="1200">
            <p class="text mt-4">{{ __('mesages.Welcome') }}</p>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
@endsection
{{-- Bryan Theophillus - 2401953966 --}}
