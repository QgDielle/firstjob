<x-layout>

    <x-header>
        Lista articoli da rivisionare
    </x-header>

    <a href="{{ route('revisor.recap') }}">Lista articoli recap</a>

    <h1>{{ $article_to_check ? "Ecco l'ultimo annuncio da rivisionare" : 'Nessun articolo da rivisionare' }}</h1>

    @if ($article_to_check)
        <div class="container justify-content-around my-5">
            <div class="row align-items-center text-center">
                <div class="col-12 col-md-6">
                    <div>
                        <div id="carouselExampleControls" class="carousel slide mb-3" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/300" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/300" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/300" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="container-fluid justify-content-center  ms-5">
                        <img src="https://picsum.photos/350" alt="">
                        <h2 class="card-title mt-3">{{ $article_to_check->title }}</h2>
                        <hr class="w-75 mx-auto">
                        <h5 class="m-2">{{ $article_to_check->category->name }}</h5>
                        <p class="m-2">€ {{ $article_to_check->price }}</p>
                        <p class="description m-2">{{ $article_to_check->description }}</p>
                        <div>
                            <a href="#" class="btn btn-2 mt-2">####</a>
                            <form method="POST"
                                action="{{ route('revisor.accept', ['article' => $article_to_check]) }}">
                                @method('PATCH')
                                @csrf
                                <button type="submit" class="btn btn-success my-1">Accetta</button>
                            </form>
                            <form method="POST"
                                action="{{ route('revisor.decline', ['article' => $article_to_check]) }}">
                                @method('PATCH')
                                @csrf
                                <button type="submit" class="btn btn-danger my-1">Rifiuta</button>
                            </form>
                            <x-messages />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-layout>
