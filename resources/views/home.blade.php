<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
<div class="container flex-center position-ref full-height">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- Authentication Links -->
                <div class="top-right links">
                @guest
                <a class="home-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="home-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                @else
                    <a href="{{ url('/') }}" class="home-link">MAIN</a>
                    <a class="home-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    @endguest
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('YEEEES YOU ARE LOGGED IN!') }}
                </div>
            </div>


        </div>
    </div>
</div>
</body>
@include('layouts.footer')
</html>
