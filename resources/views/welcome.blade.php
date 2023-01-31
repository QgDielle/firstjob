<x-layout>

    <x-header>
        PRESTO.IT
    </x-header>


    @auth
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 d-flex justify-content-center ">
                    <a class="btn btn-primary" href="{{ route('article.create') }}">Inserisci annuncio</a>

                </div>
            </div>
            <div class="row my-5">
                @foreach ($articles as $article)
                    <div class="col-12 col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://picsum.photos/300" class="card-img-top" alt="{{ $article->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->category->name }}</h5>
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ $article->price }}</p>
                                <p class="card-text">{{ $article->description }}</p>
                                <a class="btn btn-primary" href="{{ route('article.show', compact('article')) }}">Vai al
                                    dettaglio del prodotto</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endauth

</x-layout>
