<x-layout>
    <x-header>
        Il tuo profilo
    </x-header>
    <div class="container">
        <div class="row">
            <x-messages />

            @forelse ($articles as $article)
                @if (Auth::check() && auth()->id() == $article->user_id)
                    <div class="col-12 col-md-3 mb-2">
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
                                <div class="d-flex justify-content-around">
                                    <a class="btn btn-outline-custom"
                                        href="{{ route('article.show', compact('article')) }}">{{ __('ui.detail') }}</a>
                                    <form method="POST" action="{{ route('article.delete', compact('article')) }}"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                @else
                    <p>non puoi modificare</p>
                @endif
            @empty
                <h2>Non hai caricato nessun articolo</h2>
            @endforelse
        </div>
    </div>
</x-layout>
