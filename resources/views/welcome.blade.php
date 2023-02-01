<x-layout>
    
    

    <div class="container-fluid mt-5 pt-5 sfondo-1 vh-100">
        <div class="row justify-content-center align-content-center h-50">

            <div class="col-12 col-md-6">
            </div>
            
            <div class="col-12 col-md-4">
                
                <div class="row">
                    <img src="/media/presto.it-logo.png" alt="">

                    <div class="d-flex flex-column border-0 bg-flash rounded-2 p-2">
                        <h4 class="card-title mb-3 text-center display-4">Il tuo annuncio in due soli passaggi</h4>
                        <a class="btn btn-outline-primary mx-auto" href="{{route('article.create')}}">Inserisci annuncio</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h4 class="text-center mt-5 display-2">Ultimi annunci:</h4>
        <div class="row  my-5">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card my-5 mx-3 shadow border-0">
                        
                        <img src="https://picsum.photos/300" class="card-img-top" alt="{{ $article->title }}">
                        <div class="card-body ">
                            <h5 class="card-title">{{ $article->category->name }}</h5>
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">€ {{ $article->price }}</p>
                            <p class="card-text">{{ $article->description }}</p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-2 p-2 mt-4 rounded-2 me-3" href="{{ route('article.show', compact('article')) }}">Dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    
    
    
</x-layout>
