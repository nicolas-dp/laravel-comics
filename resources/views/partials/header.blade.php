<header>

    <div class="bg-primary text-white">
        <div class="powered-visa container">
            <small>POWERED VISA</small>
            <small>ADDICTIONAL DC SITES</small>
        </div>
    </div>
    <nav>
        <div class="container">
            <div class="logo d-flex">
                <a href="/">
                    <img height="50" src="{{asset('img/dc-logo.png')}}" alt="...">
                </a>
            </div>

            <ul class="nav justify-content-center text-uppercase">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'characters' ? 'active' : '' }}" aria-current="page" href="{{route('characters')}}">characters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" aria-current="page" href="{{route('comics')}}">comics</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" aria-current="page" href="{{route('movies')}}">movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" aria-current="page" href="{{route('tv')}}">tv</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'games' ? 'active' : '' }}" aria-current="page" href="{{route('games')}}">games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" aria-current="page" href="{{route('collectibles')}}">collectibles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" aria-current="page" href="{{route('videos')}}">videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" aria-current="page" href="{{route('fans')}}">fans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'active' : '' }}" aria-current="page" href="{{route('news')}}">news</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" aria-current="page" href="{{route('shop')}}">shop</a>
                </li>
            </ul>
        </div>

    </nav>
</header>