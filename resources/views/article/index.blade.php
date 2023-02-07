<x-layout>
    
    <x-header>
        Tutti gli articoli
    </x-header>

    <div class="container d-flex justify-content-center">
        <a class="btn btn-outline-refuse me-2" href="{{url()->previous()}}"><i class="bi bi-backspace"></i></a>
        <a class="btn btn-outline-custom-r" href="{{route('article.create')}}">Aggiungi articolo</a>
    </div>

    <div class="container my-5">
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
                            {{-- <p class="fs-italic">{{ $article->description }}</p> --}}
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
    </div>

</x-layout>
