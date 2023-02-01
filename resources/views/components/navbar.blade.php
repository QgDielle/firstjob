<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top bg-gradient">
    <div class="container-fluid fs-4">
        <a class="navbar-brand" href="#">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
            aria-controls="navbarsExample04" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">Vai agli annunci</a>
                </li>
                @if (Auth::check() && Auth::user()->is_revisor)
                <a class="nav-link active" aria-current="page" href="{{ route('revisor.index') }}">Revisione</a>
                <span class="text-white bg-danger">{{App\Models\Article::toBeRevisionedCount()}}</span>
                @endif
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Ciao {{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu navbar1">
                            <li><a class="dropdown-item" href="">Profilo</a></li>
                            <li><a class="dropdown-item" href=""
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                            <form id="form-logout" method="POST" class="d-none " action="{{ route('logout') }}">@csrf
                            </form>
                            <li><a class="dropdown-item" href="#">Annunci inseriti</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Registrati!</a>
                        <ul class="dropdown-menu navbar1">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                @endauth
            </ul>
            <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
