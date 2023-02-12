<nav class="navbar navbar-expand-md bg-custom1  fixed-top">
    <div class="container-fluid justify-content-between">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-brand me-2"><a href="{{ route('welcome') }}"><img style="width: 100px" class="" src="/media/bgwhite.png" alt=""></a></div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  align-items-start">

                
                <li class="nav-item py-3 py-md-0">
                    <a class="btn btn-outline-custom1 me-1" aria-current="page"
                        href="{{ route('revisor.contactus') }}">{{ __('ui.ourTeam') }}</a>
                </li>
                
                <li class="nav-item py-3 py-md-0">
                    <a class="btn btn-outline-custom1 me-1" aria-current="page"
                        href="{{ route('article.index') }}">{{ __('ui.allArticles') }}</a>
                </li>


                {{-- DROPDOWN AUTORIZZATO E NON --}}
                <li class="nav-item p-3 py-md-0 dropdown">
                    @auth
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('ui.hello') }} <b class="text-black">{{ Auth::user()->name }}</b> <i class="bi bi-person-lines-fill fs-6 text-white"></i>
                        </a>


                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('article.profile', ['user_id' => auth()->id()]) }}">Profilo</a></li>
                            
                            @if (Auth::check() && Auth::user()->is_revisor)
                                <li class="d-flex align-items-center position-relative"><a class="dropdown-item" href="{{ route('revisor.index') }}">{{ __('ui.review') }}</a>
                                    @if (App\Models\Article::toBeRevisionedCount())
                                        <span id="notification">{{ App\Models\Article::toBeRevisionedCount() }}</span>
                                    @endif
                                </li>
                                <li><a class="dropdown-item" href="{{ route('revisor.recap') }}">{{ __('ui.reviewedArticles') }}</a></li>
                            @endif
                            <li><a class="dropdown-item" href="{{ route('article.create') }}">{{ __('ui.insertAd') }}<i
                                class="bi bi-plus-circle ms-2"></i></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                            <form id="form-logout" method="POST" class="d-none " action="{{ route('logout') }}">@csrf
                            </form>
                        </ul>

                    @else
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-lines-fill fs-6 text-white"></i>
                        </a>


                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('article.create') }}">{{ __('ui.insertAd') }}<i
                                class="bi bi-plus-circle ms-2"></i></a></li>
                                <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('ui.login|register') }}</a></li>
                        </ul>
                    
                    @endauth
                </li>

            </ul>
            <div class=" d-flex flex-fill justify-content-end">


                {{-- @auth
                    <a class="btn btn-outline-light rounded-pill me-3 fw-bold  fs-md-5  "
                        href="{{ route('article.create') }}"><i
                            class="bi bi-plus-circle me-2"></i>{{ __('ui.addArticle') }}</a>


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
                @endauth --}}
                <button type="button" class="btn btn-outline-custom1" data-bs-toggle="modal" data-bs-target="#ModalForm">
                    <i class="fa-solid fa-earth-americas me-1"></i>{{__('ui.lanSel')}}
                </button>

            </div>
        </div>
    </div>
</nav>
