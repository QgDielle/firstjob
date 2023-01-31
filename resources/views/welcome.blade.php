<x-layout>
    
    <x-header>
        PRESTO.IT
    </x-header>

    @auth
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center ">
                <a class="btn btn-2 p-2 rounded-2" href="{{route('article.create')}}">Inserisci annuncio</a>
            </div>
        </div>
    </div>
    @endauth
    <div class="container-fluid sfondo-1">
        <div class="row my-5">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card my-4" style="width: 18rem;">
                        
                        <img src="https://picsum.photos/300" class="card-img-top" alt="{{ $article->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->category->name }}</h5>
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->price }}</p>
                            <p class="card-text">{{ $article->description }}</p>
                            <a class="btn btn-2 p-2 mt-4 rounded-2" href="{{ route('article.show', compact('article')) }}">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    
    
    
</x-layout>
