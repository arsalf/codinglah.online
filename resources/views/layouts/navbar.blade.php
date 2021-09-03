<nav id="navbar" class="navbar navbar-expand-lg sticky-top navbar-dark">
    <div class="container-fluid">
        <div class="font-effect-anaglyph">
            <a id="text-icon" class="navbar-brand" href="{{url('/')}}"><img src="/img/logo.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top"> Programming Nusantara </a>
        </div>
        <button id="toggler" class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
            aria-label="Toggle navigation" onclick="addBorder(this.id)">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <!-- Left Side -->
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll multi-level" role="menu"
                style="--bs-scroll-height: 100px;">
                <li class="nav-item dropdown">
                    <div class="d-flex align-content-center flex-wrap a-grup">
                        <a id="home-tutorial" href="{{url('/tutorial')}}" class="nav-link {{ Request::is('tutorial') || Request::is('tutorial/*') ? 'active' : ''}}"
                            type="button">
                            Tutorial
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <div class="d-flex align-content-center flex-wrap a-grup">
                        <a id="home-tantangan" href="{{url('/tantangan')}}" class="nav-link {{ Request::is('tantangan') || Request::is('tantangan/*') ? 'active' : ''}}"
                            type="button">
                            Tantangan
                        </a>
                        <a class="nav-link dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li>
                                <a id="tantangan-c" class="dropdown-item" href="{{url('/coming_soon')}}">C</a>
                            </li>
                            <li>
                                <a id="tantangan-c++" class="dropdown-item" href="{{url('/coming_soon')}}">C++</a>
                            </li>
                            <li>
                                <a id="tantangan-java" class="dropdown-item" href="{{url('/coming_soon')}}">Java</a>
                            </li>
                            <li>
                                <a id="tantangan-python" class="dropdown-item" href="{{url('/coming_soon')}}">Python</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a id="tantangan-website" class="dropdown-item" href="{{url('/coming_soon')}}">Website</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a id="tantangan-html" class="dropdown-item" href="{{url('/coming_soon')}}">HTML</a>
                                    </li>
                                    <li>
                                        <a id="tantangan-css" class="dropdown-item" href="{{url('/coming_soon')}}">CSS</a>
                                    </li>
                                    <li>
                                        <a id="tantangan-javascript" class="dropdown-item"
                                            href="{{url('/coming_soon')}}">Javascript</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{url('/coming_soon')}}">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <div class="d-flex align-content-center flex-wrap a-grup">
                        <a id="home-belajar" href="{{url('/belajar') }}" class="nav-link {{ Request::is('belajar') || Request::is('belajar/*') ? 'active' : ''}}" type="button">
                            Belajar
                        </a>
                        <a class="nav-link dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li>
                                <a id="belajarc" class="dropdown-item"
                                href="{{ url('/belajar/c/intro') }}">C</a>
                            </li>
                            <li>
                                <a id="belajar-cpp" class="dropdown-item" href="{{url('/coming_soon')}}">C++</a>
                            </li>
                            <li>
                                <a id="belajar-java" class="dropdown-item" href="{{url('/coming_soon')}}">Java</a>
                            </li>
                            <li>
                                <a id="belajar-python" class="dropdown-item" href="{{url('/coming_soon')}}">Python</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a id="belajar-website" class="dropdown-item" href="{{url('/coming_soon')}}">Website</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a id="belajar-html" class="dropdown-item" href="{{url('/coming_soon')}}">HTML</a>
                                    </li>
                                    <li>
                                        <a id="belajar-css" class="dropdown-item" href="{{url('/coming_soon')}}">CSS</a>
                                    </li>
                                    <li>
                                        <a id="belajar-javascript" class="dropdown-item" href="{{url('/coming_soon')}}">Javascript</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{url('/coming_soon')}}">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <div class="d-flex align-content-center flex-wrap a-grup">
                        <a id="home-karya" href="{{url('/karya')}}" class="nav-link {{ Request::is('karya') || Request::is('karya/*') ? 'active' : ''}}" type="button">
                            Karya
                        </a>
                        <a class="nav-link dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li>
                                <a id="karya-alat" class="dropdown-item"
                                    href="{{url('/karya/alat')}}">Alat</a>
                            </li>
                            <li>
                                <a id="karya-games" class="dropdown-item"
                                    href="{{url('/karya/games')}}">Games</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-content-center flex-wrap a-grup">
                        <a id="home-artikel" class="nav-link {{ Request::is('artikel') || Request::is('artikel/*') ? 'active' : ''}}" href="{{url('/artikel')}}">
                            Artikel
                        </a>
                    </div>
                </li>
            </ul>

            <!-- Right Side -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><button
                                    class="btn btn-primary">Login</button></a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><button
                                    class="btn btn-primary">Register</button></a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>