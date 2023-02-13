@extends('template.master')
@section('title', __('mesages.Detail'))

@section('content')
    <div class="container bg-light pt-0 pb-0">
        <div class="row" id="rowDet">
            <div class="col-6">
                <center>
                    <h2 class="mt-5"> {{ $detail->item_name }}</h2>
                    <img id="detImg" class="card-img rounded-circle mt-1" src="{{ Storage::url($detail->picture_link) }}"
                        alt="{{ $detail->item_name }}">
                </center>
            </div>
            <div class="col-6" id="rowDesc">
                <div>
                    <h4 id="Price">{{ __('mesages.Price') }} : Rp. {{ $detail->price }}</h4>
                </div>
                <div id="description">
                    <p>{{ $detail->item_desc }}</p>
                </div>
                <td>
                    @if ($order)
                        <form action="/Buy/{{ $detail->id }}" method="POST">
                            @csrf
                            <button disabled id="buy" type="submit" class="btn">{{ __('mesages.Allreadyincart') }}</button>
                        </form>
                    @else
                        <form action="/Buy/{{ $detail->id }}" method="POST">
                            @csrf
                            <button id="buy" type="submit" class="btn">{{ __('mesages.Buy') }}</button>
                        </form>
                    @endif

                </td>
            </div>
        </div>
    </div>
@endsection
{{-- Bryan Theophillus - 2401953966 --}}
