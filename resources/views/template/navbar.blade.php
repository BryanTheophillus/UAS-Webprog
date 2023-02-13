@guest
    <nav class="navbar">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">Amazing E-Grocery</a>
            <form class="d-flex">
                <div class="dropdown">
                    <a class="btn btn-light mx-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('mesages.Language') }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/locale/id">{{ __('mesages.Bahasa') }}</a></li>
                        <li><a class="dropdown-item" href="/locale/en">{{ __('mesages.English') }}</a></li>
                    </ul>
                </div>
                <button class="btn btn-light mx-2" id="btnNav">
                    <a href="/Login">{{ __('mesages.Login') }}</a>
                </button>
                <button class="btn btn-light mx-2" id="btnNav">
                    <a href="/Register">{{ __('mesages.Register') }}</a>
                </button>
            </form>
        </div>
    </nav>
@endguest

@auth
    @if (Auth::user()->role_id == 1)
        <nav class="navbar">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">Amazing E-Grocery</a>
                <form class="d-flex">
                    <div class="dropdown">
                        <a class="btn btn-light mx-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('mesages.Language') }}
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="/locale/id">{{ __('mesages.Bahasa') }}</a></li>
                            <li><a class="dropdown-item" href="/locale/en">{{ __('mesages.English') }}</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-light mx-2" id="btnNav">
                        <a href="/Logout">{{ __('mesages.Logout') }}</a>
                    </button>
                </form>
            </div>
        </nav>
        <nav class="navbar justify-content-evenly ">
            <a href="/Home">{{ __('mesages.Home') }}</a>
            <a href="/Cart">{{ __('mesages.Cart') }}</a>
            <a href="/Profile">{{ __('mesages.Profile') }}</a>
            <a href="/AccoutManagement">{{ __('mesages.AccountMaintannace') }}</a>
        </nav>
    @endif
    @if (Auth::user()->role_id == 2)
        <nav class="navbar">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">Amazing E-Grocery</a>
                <form class="d-flex">
                    <div class="dropdown">
                        <a class="btn btn-light mx-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('mesages.Language') }}
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="/locale/id">{{ __('mesages.Bahasa') }}</a></li>
                            <li><a class="dropdown-item" href="/locale/en">{{ __('mesages.English') }}</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-light mx-2" id="btnNav">
                        <a href="/Logout">{{ __('mesages.Logout') }}</a>
                    </button>
                </form>
            </div>
        </nav>
        <nav class="navbar justify-content-evenly ">
            <a href="/Home">{{ __('mesages.Home') }}</a>
            <a href="/Cart">{{ __('mesages.Cart') }}</a>
            <a href="/Profile">{{ __('mesages.Profile') }}</a>
        </nav>
    @endif
@endauth
{{-- Bryan Theophillus - 2401953966 --}}
