<nav class="navbar navbar-expand-md bg-custom1 fixed-top">
    <div class="container-fluid">
        <div class="">
            <a class="navbar-brand fw-bold text-white " href="{{ route('welcome') }}">Presto.it</a>

        </div>
        {{-- <button class="btn btn-outline-custom1 border-1 border-white me-1" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">Categorie</button> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                {{-- <div class="d-flex ">
                    <x-_locale lang="it" />
                    <x-_locale lang="en" />
                    <x-_locale lang="es" />
                </div> --}}


                @if (Auth::check() && Auth::user()->is_revisor)
                    <li class="nav-item d-flex">
                        <a class="btn btn-outline-custom1" aria-current="page"
                            href="{{ route('revisor.index') }}">Revisione</a>
                        @if (App\Models\Article::toBeRevisionedCount())
                            <span id="notification">{{ App\Models\Article::toBeRevisionedCount() }}</span>
                        @endif
                    </li>
                    <li class="nav-item ">
                        <a class="btn btn-outline-custom1 " href="{{ route('revisor.recap') }}">Articoli revisionati</a>
                    </li>
                @endif
                <li class="nav-item py-3 py-md-0">
                    <a class="btn btn-outline-custom1 me-1" aria-current="page"
                        href="{{ route('article.index') }}">Tutti gli articoli</a>
                </li>
                @auth
                    <li class="nav-item dropdown list-unstyled me-3">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">{{ Auth::user()->name }} <i
                                class="bi bi-person-lines-fill mx-1 fs-6 text-white"></i> </a>
                        <ul class="dropdown-menu navbar1">
                            <li><a class="dropdown-item" href="">Profilo</a></li>
                            <li><a class="dropdown-item " href="{{ route('article.create') }}">Inserisci annuncio</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>
            <div class=" d-flex flex-fill justify-content-end">



                <a class="btn btn-outline-light  rounded-pill me-3 fw-bold  fs-md-5  "
                    href="{{ route('article.create') }}"><i class="bi bi-plus-circle me-2"></i>Aggiungi articolo</a>
                @auth

                    <div class="me-3">
                        <a class="btn btn-outline-refuse" href="#"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                    </div>

                    <form id="form-logout" method="POST" class="d-none " action="{{ route('logout') }}">@csrf
                    </form>
                @else
                    <div class="me-3 d-flex align-items-center h-50">
                        <a class="btn btn-outline-accept  rounded-pill me-3  fw-bold fs-md-5"
                            href="{{ route('login') }}">Accedi
                            |
                            registrati</a>
                    </div>
                @endauth
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalForm">
                    Lingue
                </button>

            </div>
        </div>
    </div>
</nav>
