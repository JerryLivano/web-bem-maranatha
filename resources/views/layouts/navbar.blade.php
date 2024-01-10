<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <img src="{{ asset('img/logo.png') }}" height="60" />

        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="nav-link text-light"><span class="text-warning">BEM</span> Maranatha</div>
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <a href="{{ route('home') }}"><button data-mdb-ripple-init type="button" class="btn px-3 me-1 text-light">
                        Home
                    </button></a>
                <button data-mdb-ripple-init type="button" class="btn px-3 me-1 text-light">
                    Struktur
                </button>
                <button data-mdb-ripple-init type="button" class="btn px-3 me-1 text-light">
                    Kegiatan
                </button>
                <button data-mdb-ripple-init type="button" class="btn px-3 me-1 text-light">
                    Kajian
                </button>
                <button data-mdb-ripple-init type="button" class="btn px-3 me-1 text-light">
                    Pendaftaran
                </button>
                @auth
                <form id="logout-form" action="{{route('logout')}}" method="post">
                    @csrf
                    <a class="nav-link" onclick="$('#logout-form').submit();">
                        <button data-mdb-ripple-init type="submit" class="btn btn-light text-primary me-3">
                            {{ Auth::user()->name }}
                        </button>
                    </a>
                </form>
                @else
                <a href="{{ route('login') }}" class="nav-link">
                    <button data-mdb-ripple-init type="button" class="btn btn-light text-primary me-3">
                        Login Member
                    </button>
                </a>
                @endauth
            </div>
        </div>
    </div>
</nav>