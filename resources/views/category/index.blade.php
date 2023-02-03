<x-layout>
    <x-subnavbar />
    <x-header>
        {{$category->name}}
    </x-header>
    <div class="container my-5">
        <div class="row">
            @forelse ($category->articles as $article)
                <div class="col-12 col-md-3 my-3">
                    <div class="card">
                        <img src="https://picsum.photos/300" class="card-img-top" alt="{{ $article->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <hr>
                            <h5 class="card-category">{{ $article->category->name }}</h5>
                            <p class="card-price">{{ $article->price }}</p>
                            <p class="card-text">{{ $article->description }}</p>
                            <a class="btn button-17" href="{{ route('article.show', compact('article')) }}">Vai al
                                dettaglio</a>
                        </div>
                    </div>
                </div>
            @empty
                <h2 class="text-center">Nessun articolo aggiungine uno <a href="{{ route('article.create') }}">clicca
                        qui</a></h2>
            @endforelse
        </div>
    </div>
</x-layout>
