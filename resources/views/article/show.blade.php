<x-layout>
    <x-header>
        {{ $article->title }}
    </x-header>
    <div class="container d-flex justify-content-center">
        <a class="btn btn-outline-refuse me-2" href="{{ url()->previous() }}"> <i class="bi bi-backspace">{{ __('ui.back') }}</i></a>
        <a class="btn btn-outline-custom-r" href="{{ route('article.create') }}">{{ __('ui.addArticle') }}</a>
    </div>
    <div class="container justify-content-around my-5">
        <div class="row align-items-center text-center">
            <div class="col-12 col-md-6">
                @if (count($article->images))
                    <div id="showCarousel" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($article->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ Storage::url($image->path) }}" class="img-fluid p-3 rounded"
                                        alt="">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                @else
                    <div id="showCarousel" class="carousel slide " data-bs-ride="carousel">
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="col-12 col-md-6">
                <div>
                    <div class="card-body">
                        <h2 class="card-title mt-3">{{ $article->title }}</h2>
                        <hr class="w-75 mx-auto">
                        <p>{{ __('ui.category') }}:</p>
                        <h5 class="card-category m-2">{{ $article->category->name }}</h5>
                        <p>{{ __('ui.price') }}:</p>
                        <p class="card-price m-2">€ {{ $article->price }}</p>
                        <p>{{ __('ui.description') }}:</p>
                        <p class="description fst-italic">{{ $article->description }}</p>
                        <a href="#" class="btn btn-outline-custom">{{ __('ui.contact') }}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
