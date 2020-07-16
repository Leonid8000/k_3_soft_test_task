<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
<body>
    <div class="container flex-center position-ref full-height">
        <div class="top-right links">
                <a class="home-link" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                        <!-- Authentication Links -->
                        @guest

                            <a class="home-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                            @if (Route::has('register'))

                                    <a class="home-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                            @endif
                        @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
        </div>
            <main class="py-4">
                @yield('content')
            </main>
    </div>
</body>
</html>
