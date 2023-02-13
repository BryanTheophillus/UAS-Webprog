@extends('template.master')
@section('title', __('mesages.AccountMaintannace'))


@section('content')

    <div class="container mt-3">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>{{__('mesages.Account')}}</th>
                    <th>{{__('mesages.Action')}}</th>
                </tr>
            </thead>
            @foreach ( $Accounts as  $account)
                <tbody>
                    <tr>
                        <td>{{__('mesages.Account')}} - {{ $account->id }} : {{$account->first_name}} - Role : {{$account->role->role_name}}</td>
                        <td>
                            <div style="display: flex">
                                <form action="/Update/{{$account->id}}" method="GET" >
                                    @csrf
                                    <button type="submit" class="btn btn-danger">{{ __('mesages.UpdateRole')}}</button>
                                </form>
                                <form action="/DeleteAccount/{{$account->id}}" method="POST" >
                                    @csrf
                                    <button type="submit" class="btn btn-danger mx-5">{{ __('mesages.Delete')}}</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
    </div>
    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{ $Accounts->links() }}
            </ul>
        </nav>
    </div>
@endsection
{{-- Bryan Theophillus - 2401953966 --}}
