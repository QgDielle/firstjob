<x-layout>

    <x-header>
        {{ __('ui.allArticles') }}
    </x-header>

    <div class="container d-flex justify-content-center">
        <a class="btn btn-outline-refuse me-2" href="{{ url()->previous() }}"><i
                class="bi bi-arrow-left-short"></i>{{ __('ui.back') }}</i></a>
        <a class="btn btn-outline-custom-r" href="{{ route('article.create') }}">{{ __('ui.addArticle') }}</a>
    </div>
    <div class="container-fluid">
        <div class="container justify-content-center my-5">
            <div class="row ">
                @forelse ($articles as $article)
                    <div class="col-12 col-md-6 col-lg-3 my-3">
                        <div class="a-box mx-auto">
                            <div class="img-container">
                                <div class="img-inner">
                                    <div class="inner-skew">
                                        <img src="{{ !$article->images()->get()->isEmpty()? $article->images()->first()->getUrl(300, 450): 'https://picsum.photos/300' }}"
                                            class="card-img-top" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="text-container">
                                <h3 class="card-title">{{ $article->title }}</h3>
                                <div>
                                    <p class="card-price">€ {{ $article->price }}</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-outline-custom"
                                        href="{{ route('article.show', compact('article')) }}">{{ __('ui.detail') }}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div>
                        <h2 class="text-center">{{ __('ui.searchNothing') }}</h2>
                    </div>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>

    </div>
    {{-- <div class="container my-5">
        <div class="row">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3 my-3">
                    <div class="card my-5 mx-3 shadow border-0">
                        <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(300,450) : 'https://picsum.photos/300'}}" class="card-img-top" alt="{{ $article->title }}">
                        <div class="card-body">
                            <h2 class="card-title">{{ $article->title }}</h2>
                            <hr>
                            <h5 class="card-category">{{ $article->category->name }}</h5>
                            <p class="card-price">€ {{ $article->price }}</p>
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-outline-custom">Vai al
                                dettaglio</a>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <h2 class="text-center">La ricerca non ha generato nessun risultato</h2>
                </div>
            @endforelse
            <div class="d-flex justify-content-center">
                {{ $articles->links() }}
            </div>
        </div>
    </div> --}}

</x-layout>
