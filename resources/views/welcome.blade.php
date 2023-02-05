<x-layout>

    
    <div class="container-fluid mt-5 pt-5 sfondo-1 vh-100">
        
        <x-messages />

        <div class="row justify-content-center align-content-center h-100">

            <div class="col-md-4">
            </div>

            <div class="col-12 col-md-3">
                <div class="d-flex justify-content-center">
                    <img style="width: 350px" class="" src="/media/presto.it-logo.png" alt="">
                </div>

                <div class="d-flex flex-column border-0 rounded-2 p-2 bg-custom1">
                    <h4 class=" mb-3 text-center display-6">Il tuo annuncio in due semplici passaggi</h4>
                    <a class="btn btn-outline-light mx-auto fs-5" href="{{route('article.create')}}">Inizia subito</a>
                </div>
               
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="container bg-custom1 rounded-2">
            <h4 class="text-center mt-5 display-2">Ultimi articoli</h4>
        </div>
        <div class="row  my-3">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card my-5 mx-3 shadow border-0">

                        <img src="https://picsum.photos/300" class="card-img-top" alt="{{ $article->title }}">
                        <div class="card-body ">
                            <h5 class="card-title">{{ $article->category->name }}</h5>
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">€ {{ $article->price }}</p>
                            {{-- <p class="card-text">{{ $article->description }}</p> --}}
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-outline-custom" href="{{ route('article.show', compact('article')) }}">Dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



</x-layout>
