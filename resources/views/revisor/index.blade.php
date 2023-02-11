<x-layout>
    <x-header>
        {{ __('ui.itemsForReview') }}
    </x-header>

    <div class="container d-flex justify-content-center">
        <div>
            <a class="btn btn-outline-refuse me-2" href="{{ url()->previous() }}"><i class="bi bi-backspace"></i></a>
        </div>
        <h1 class="text-center">
            {{ $article_to_check ? 'Ultimo articolo da revisionare:' : 'Nessun articolo da rivisionare' }}</h1>
    </div>

    @if ($article_to_check)
        <div class="container justify-content-around my-5">
            <div class="row align-items-center text-center">
                <div class="col-12 col-md-6">
                    @if (count($article_to_check->images))
                        <div id="showCarousel" class="carousel slide " data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($article_to_check->images as $image)
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
                    <div class="container justify-content-center">
                        {{-- <img src="https://picsum.photos/350" alt=""> --}}
                        <h2 class="card-title mt-3">{{ $article_to_check->title }}</h2>
                        <hr class="w-75 mx-auto">
                        <h5 class="m-2">{{ $article_to_check->category->name }}</h5>
                        <p class="m-2">€ {{ $article_to_check->price }}</p>
                        <p class="description m-2">{{ $article_to_check->description }}</p>
                        <div class="d-flex justify-content-center">
                            <form method="POST"
                                action="{{ route('revisor.accept', ['article' => $article_to_check]) }}">
                                @method('PATCH')
                                @csrf
                                <button type="submit" class=" mx-2 btn btn-outline-accept my-1">{{ __('ui.accept') }}</button>
                            </form>
                            <form method="POST"
                                action="{{ route('revisor.decline', ['article' => $article_to_check]) }}">
                                @method('PATCH')
                                @csrf
                                <button type="submit" class=" mx-2 btn btn-outline-refuse my-1">{{ __('ui.reject') }}</button>
                            </form>
                        </div>
                        @if (count($article_to_check->images))
                            @foreach ($article_to_check->images as $image)
                                <div class="card-body">
                                    <h5 class="tx-accent">{{ __('ui.revisionImg') }}</h5>
                                    <p>{{ __('ui.adult') }} <span class="{{ $image->adult }}"></span></p>
                                    <p>{{ __('ui.satire') }} <span class="{{ $image->spoof }}"></span></p>
                                    <p>{{ __('ui.medicine') }} <span class="{{ $image->medical }}"></span></p>
                                    <p>{{ __('ui.violence') }} <span class="{{ $image->violence }}"></span></p>
                                    <p>{{ __('ui.contentSexual') }} <span class="{{ $image->racy }}"></span></p>
                                </div>
                            @endforeach
                            <div class="card-text">
                                @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                        <p class="d-inline">{{ $label }},</p>
                                    @endforeach
                                @endif
                            </div>
                        @endif
                        <x-messages />
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-layout>
