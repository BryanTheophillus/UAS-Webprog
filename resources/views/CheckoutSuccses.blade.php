@extends('template.master')
@section('title', __('mesages.CheckoutSucces'))

@section('content')

    <div class="container1">
        <div class="circle aos-item" data-aos="zoom-in" data-aos-duration="1200">
            <div class="row">
                <div class="col-12">
                    <p class="text mt-3">{{ __('mesages.Checkout1') }}</p>
                </div>
                <center>
                    <div class="col-12">
                        <span > {{__('mesages.Checkout2')}}</span>
                    </div>
                    <div class="col-12">
                        <a href="/Home">{{__('mesages.back')}}</a>
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
