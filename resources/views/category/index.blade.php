<x-layout>
    <x-header>
        {{ $category->name }}
    </x-header>
    <div class="container d-flex justify-content-center">
        <a class="btn btn-outline-refuse me-2" href="{{ url()->previous() }}"><i
                class="bi bi-arrow-left-short"></i>{{ __('ui.back') }}</a>
        <a class="btn btn-outline-custom-r" href="{{ route('article.create') }}">{{ __('ui.addArticle') }}</a>
    </div>
    <div class="container my-5">
        <div class="row">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="a-box mx-auto">
                        <div class="img-container">
                            <div class="img-inner">
                                <div class="inner-skew">
                                    <img src="{{ !$article->images()->get()->isEmpty()? $article->images()->first()->getUrl(300, 450): 'https://picsum.photos/300' }}"
                                        class="card-img-top" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="text-container">
                            <h3 class="card-title">{{ $article->title }}</h3>
                            <div>
                                <p class="card-price">€ {{ $article->price }}</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-custom"
                                    href="{{ route('article.show', compact('article')) }}">{{ __('ui.detail') }}</a>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div>
                    <h2 class="text-center">{{ __('ui.nothingArticle') }} <a class="btn btn-outline-custom"
                            href="{{ route('article.create') }}">{{ __('ui.clickhere') }}</a></h2>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
