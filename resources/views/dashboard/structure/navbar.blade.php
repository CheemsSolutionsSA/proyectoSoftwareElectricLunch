<<<<<<< HEAD
<nav class="navbar z-ind navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/home">Electric Lunch</a>
=======
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Electric Lunch</a>
>>>>>>> parent of 20e5cbc (Organizando cosas)
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('restaurant.index') }}">Restaurantes<span
                        class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('client.index') }}">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reservation.index') }}">Reservaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">Usuarios</a>
            </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
