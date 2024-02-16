<div class="bg-dark">
    <div class="container">
        <header class=" d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
                href="/"><span class="fs-4 text-light">{{ config('app.name') }}</span></a>

            <ul class="nav nav-pills">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('login') ? 'active' : '' }}"
                            href="{{ Route::is('login') ? '#' : route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('register') ? 'active' : '' }}"
                            href="{{ Route::is('register') ? '#' : route('register') }}">Register</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="nav-link">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </header>
    </div>
</div>
