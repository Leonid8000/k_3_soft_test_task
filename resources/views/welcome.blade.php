<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @include('layouts.head')
    <body>
        <div class="container flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="home-link">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="home-link">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="home-link">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                @include('layouts.title')

        </div>
    </body>
        @include('layouts.footer')
</html>


