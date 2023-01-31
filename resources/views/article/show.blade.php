<x-layout>
    <x-header>
        Index articoli
    </x-header>
    <div class="container justify-content-around my-5">
        <div class="row align-items-center text-center">
            <div class="col-12 col-md-6 my-3">
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
                <div class="w-50 p-3 border shadow">
                    <h2 class="card-title m-2">{{ $article->title }}</h2>
                    <hr>
                    <h5 class="m-2">{{ $article->category->name }}</h5>
                    <p class="m-2">€ {{ $article->price }}</p>
                    <p class="description m-2">{{ $article->description }}</p>
                    <a href="#" class="btn btn-2 p-2 mt-4 rounded-2">Vai al dettaglio</a>
                </div>  
            </div>
        </div>
    </div>
</x-layout>