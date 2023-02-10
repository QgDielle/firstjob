<x-layout>
    
    
    {{-- <button type="button" class="btn btn-dark h-25 mt-5 align-content-center" id="dark-mode-toggle">Modalità scura</button> --}}
    
    
    <div class="container-fluid sfondo-1 vh-100">
        
        <x-messages />
        
        <div class="row justify-content-center align-content-center h-75">
            
            <div class="col-md-6">
            </div>
            
            <div class="col-12 col-md-3">
                <div class="d-flex justify-content-center">
                    <img style="width: 300px" class="" src="/media/presto-it-logo.png" alt="">
                </div>
                
                <div class="d-flex flex-column border-0 rounded-2 p-2 bg-custom1">
                    <h4 class=" mb-3 text-center display-6">{{__('ui.insertHome')}}</h4>
                    <a class="btn btn-outline-light mx-auto fs-5" href="{{route('article.create')}}">{{__('ui.insertButton')}}</a>
                </div>
                
            </div>
        </div>
    </div>
    
    {{-- ARTICLES --}}
    
    <div class="container-fluid bg-custom1 rounded-2">
        <h4 class="text-center mt-5 display-2 p-3 text-white">{{__('ui.allArticles')}}</h4>
    </div>
    <div class="container-fluid">
        <div class="container justify-content-center">
            <div class="row my-3">
                @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="a-box mx-auto">
                        <div class="img-container">
                            <div class="img-inner">
                                <div class="inner-skew">
                                    <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(300,450) : 'https://picsum.photos/300'}}" class="card-img-top" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="text-container">
                            <h3 class="card-title">{{ $article->title }}</h3>
                            <div>
                                <p class="card-price">€ {{ $article->price }}</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-custom" href="{{ route('article.show', compact('article')) }}">Dettaglio</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>  
    </x-layout>
    {{-- <div class="card my-5 mx-3 shadow border-0">
        <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(300,450) : 'https://picsum.photos/300'}}" class="card-img-top" alt="">
        <div class="card-body ">
            <h5 class="card-name">{{ $article->category->name }}</h5>
            <hr>
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-price">€ {{ $article->price }}</p>
            
            <div class="d-flex justify-content-end">
                <a class="btn btn-outline-custom" href="{{ route('article.show', compact('article')) }}">Dettaglio</a>
            </div>
        </div>
    </div> --}}