@extends('template.master')
@section('title', __('mesages.Home'))

@section('content')

    <div class="d-flex flex-wrap justify-content-center">
        @foreach ($items as $item)
            <a href="/Detail/{{$item->id}}" id="detail">
                <div class="card m-3">
                    <img src="{{Storage::url($item->picture_link)}}" class="card-img rounded-circle" alt="{{$item->item_name}}">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">{{ $item->item_name }}</h5>
                            <span class="card-text"><a href="/Detail/{{$item->id}}">{{ __('mesages.Detail') }}....</a></span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{ $items->links() }}
            </ul>
        </nav>
    </div>
@endsection
{{-- Bryan Theophillus - 2401953966 --}}
