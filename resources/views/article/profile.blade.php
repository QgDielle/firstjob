<x-layout>
    <x-header>
        Il tuo profilo
    </x-header>
    <div class="container">
        <div class="row">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
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
                <h2>Non hai caricato nessun articolo</h2>
            @endforelse
        </div>
    </div>
</x-layout>
