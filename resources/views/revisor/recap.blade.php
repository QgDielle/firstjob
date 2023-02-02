<x-layout>

    {{-- @dd($articles_recap) --}}
    <x-header>
        Lista articoli revisionati
    </x-header>

    <div class="container justify-content-around my-5">
        <div class="row align-items-center text-center">
            @forelse($articles_recap as $article)
                <div class="col-12 col-md-4">
                    <div class="ms-5">
                        <img src="https://picsum.photos/350" alt="">
                        <h2 class="card-title mt-3">{{ $article->title }}</h2>
                        <hr class="w-75 mx-auto">
                        <h5 class="m-2">{{ $article->category->name }}</h5>
                        <p class="m-2">€ {{ $article->price }}</p>
                        <p class="description m-2">{{ $article->description }}</p>
                        <a href="#" class="btn btn-2 mt-2">####</a>
                        <form method="POST" action="{{ route('revisor.accept', ['article' => $article]) }}">
                            @method('PATCH')
                            @csrf
                            <button type="submit" class="btn btn-success my-1">Accetta</button>
                        </form>
                        <form method="POST" action="{{ route('revisor.decline', ['article' => $article]) }}">
                            @method('PATCH')
                            @csrf
                            <button type="submit" class="btn btn-danger my-1">Rifiuta</button>
                        </form>
                        <x-messages />
                    </div>
                </div>


            @empty
                <h1 class="text-center">nessun articolo</h1>
            @endforelse
        </div>
    </div>

</x-layout>
