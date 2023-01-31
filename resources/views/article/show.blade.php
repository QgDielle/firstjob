<x-layout>
    <x-header>
        Index articoli
    </x-header>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-3 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/300" class="card-img-top" alt="{{ $article->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <h5 class="card-title">{{ $article->category->name }}</h5>
                        <p class="card-text">{{ $article->price }}</p>
                        <p class="card-text">{{ $article->description }}</p>
                        <a href="#" class="btn btn-primary">Vai al dettaglio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
