<nav class="navbar navbar-expand-md bg-custom1 fixed-top">
    <div class="container-fluid">
        {{-- <div class="nav-item d-flex">
            <a class="nav-item text-white " href="{{ route('welcome') }}">Home</a>
        </div> --}}
        {{-- <button class="btn btn-outline-custom1 border-1 border-white me-1" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">Categorie</button> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item py-3 py-md-0">
                    <a class="btn btn-outline-custom1 me-1" aria-current="page"
                        href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item py-3 py-md-0">
                    <a class="btn btn-outline-custom1 me-1" aria-current="page"
                        href="{{ route('revisor.contactus') }}">{{ __('ui.ourTeam') }}</a>
                </li>
                @if (Auth::check() && Auth::user()->is_revisor)
                    <li class="nav-item d-flex">
                        <a class="btn btn-outline-custom1" aria-current="page"
                            href="{{ route('revisor.index') }}">{{ __('ui.review') }}</a>
                        @if (App\Models\Article::toBeRevisionedCount())
                            <span id="notification">{{ App\Models\Article::toBeRevisionedCount() }}</span>
                        @endif
                    </li>
                    <li class="nav-item ">
                        <a class="btn btn-outline-custom1 " href="{{ route('revisor.recap') }}">{{ __('ui.reviewedArticles') }}</a>
                    </li>
                @endif
                <li class="nav-item py-3 py-md-0">
                    <a class="btn btn-outline-custom1 me-1" aria-current="page"
                        href="{{ route('article.index') }}">{{ __('ui.allArticles') }}</a>
                </li>
                @auth
                    <li class="nav-item  list-unstyled me-3">
                        <p class="nav-link text-white" href="#">{{ __('ui.hello') }} {{ Auth::user()->name }} <i
                                class="bi bi-person-lines-fill mx-1 fs-6 text-white"></i> </p>
                    </li>
                @endauth
            </ul>
            <div class=" d-flex flex-fill justify-content-end">


                 @auth
                <a class="btn btn-outline-light  rounded-pill me-3 fw-bold  fs-md-5  "
                    href="{{ route('article.create') }}"><i class="bi bi-plus-circle me-2"></i>{{ __('ui.addArticle') }}</a>


                    <div class="me-3">
                        <a class="btn btn-outline-accept" href="#"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                    </div>

                    <form id="form-logout" method="POST" class="d-none " action="{{ route('logout') }}">@csrf
                    </form>
                @else
                    <div class="me-3 d-flex align-items-center h-50">
                        <a class="btn btn-outline-accept  rounded-pill me-3  fw-bold fs-md-5"
                            href="{{ route('login') }}">{{ __('ui.login|register') }}</a>
                    </div>
                @endauth
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ModalForm">
                    {{ __('ui.language') }}
                </button>

            </div>
        </div>
    </div>
</nav>
