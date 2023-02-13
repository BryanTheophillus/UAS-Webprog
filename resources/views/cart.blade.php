@extends('template.master')
@section('title', __('mesages.Cart'))

@section('content')
    <div>
        <h3 id="title">{{ __('mesages.Cart') }}</h3>
    </div>
    <div class="container mt-3">
        <table class="table table-borderless">
            @if ($orders ->isEmpty())
                <p class="mx-3" id="msg">{{ __('mesages.CartEmpty')}}</p>
            @else
                <div class="container-fluid">
                    <h5 class="d-flex flex-wrap justify-content-end">{{ __('mesages.TotalPrice')}} : {{ $orders->sum('price') }}
                        <form action="/Checkout" method="POST" style="margin-left: 2%; margin-right:2%;">
                            @csrf
                            <button type="submit" class="btn btn-primary">{{ __('mesages.Checkout')}}</button>
                        </form>
                    </h5>
                </div>
            @endif
            @foreach ($orders as $order)
                <tbody>
                    <tr>
                        <td><img id="cartImg" class="img-fluid rounded-start"
                                src="{{ Storage::url($order->item->picture_link) }}" alt=""></td>
                        <td class="mt-2">{{ $order->item->item_name ?? 'None' }}</td>
                        <td class="mt-2">Rp. {{ $order->price ?? 'None' }}</td>
                        <td>
                            <form action="/Delete/{{ $order->id }}" method="POST" style="margin-left: 5px">
                                @csrf
                                <button type="submit" class="btn btn-danger">{{ __('mesages.Delete')}}</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection
{{-- Bryan Theophillus - 2401953966 --}}
