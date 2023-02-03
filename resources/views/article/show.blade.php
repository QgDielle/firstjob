<x-layout>
    <x-header>
        {{$article->title}}
    </x-header>
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
                <div class="ms-5">
                    <h2 class="card-title mt-3">{{ $article->title }}</h2>
                    <hr class="w-75 mx-auto">
                    <h5 class="card-category m-2">{{ $article->category->name }}</h5>
                    <p class="card-price m-2">€ {{ $article->price }}</p>
                    <p class="description m-2">{{ $article->description }}</p>
                    <a href="#" class="btn btn-3 mt-2">####</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
