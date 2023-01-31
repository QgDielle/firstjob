<x-layout>
    <x-header>
        Index articoli
    </x-header>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 my-3">
                <div class="card">
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card h-100 align-items-center justify-content-around">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <h5 class="card-title">{{ $article->category->name }}</h5>
                        <p class="card-text">{{ $article->price }}</p>
                        <p class="card-text">{{ $article->description }}</p>
                        <a href="#" class="btn btn-primary">Vai al dettaglio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
