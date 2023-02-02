<x-layout>
    <x-subnavbar />
    <x-header>
        Tutti gli articoli
    </x-header>
    <div class="container my-5">
        <div class="row">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3 my-3">
                    <div class="card shadow border-0 rounded-3">
                        <img src="https://picsum.photos/300" class="card-img-top" alt="{{ $article->title }}">
                        <div class="card-body">
                            <h2 class="card-title">{{ $article->title }}</h2>
                            <hr>
                            <h5 class="card-title">{{ $article->category->name }}</h5>
                            <p class="card-text">€ {{ $article->price }}</p>
                            {{-- <p class="fs-italic">{{ $article->description }}</p> --}}
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-2 mt-4">Vai al
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
