<x-layout>
    <x-header>
        Index articoli
    </x-header>
    <div class="container my-5">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 my-3">
                <div class="card">
                    <img src="https://picsum.photos/300" class="card-img-top" alt="{{ $article->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <h5 class="card-title">{{ $article->category->name }}</h5>
                        <p class="card-text">{{ $article->price }}</p>
                        <p class="card-text">{{ $article->description }}</p>
                        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Vai al dettaglio</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</x-layout>
