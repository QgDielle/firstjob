<div class="container-fluid my-3  rounded-2 px-md-5">
    <div class="row justify-content-around">
        {{-- <div class=" d-none d-xl-flex col-12 col-md-4 justify-content-center align-items-center">
            <div class="card w-75 p-3 my-5 mx-3 shadow border-0 rounded-5">
                <p> {{ __('ui.preview') }} card:</p>
                @if (!empty($images))

                    @if ($images[0])
                        <div class="m-1 img-preview-card mx-auto">
                            <div class="my-3">
                                <div class=""><img class="card-img-top" src="{{ $images[0]->temporaryUrl() }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="shadow m-1 bg-light border border-1 img-preview-card d-block mx-auto">
                        <p class="text-center"> {{ __('ui.noPhoto') }}</p>
                    </div>
                @endif
                <p class="my-2 d-inline"> {{ __('ui.category') }}: @if (!empty($categoryName))
                        <p class="card-name">{{ $categoryName->name }}</p>
                    @endif
                </p>
                <p class="my-2"> {{ __('ui.title') }}</p>
                @if (!empty($title))
                    <p class="card-name">{{ $title }}</p>
                @endif
                <p class="my-2 d-inline"> {{ __('ui.price') }}: @if (!empty($price))
                        <p class="card-name">{{ $price }}</p>
                    @endif
                </p>

                <div class="d-flex justify-content-end mt-auto">
                    <a class="btn btn-outline-custom" href="#"> {{ __('ui.detail') }}</a>
                </div>
            </div>
            <div class="card my-5 mx-3 shadow border-0">
                <img src="{{ !$article->images()->get()->isEmpty()? $article->images()->first()->getUrl(300, 450): 'https://picsum.photos/300/450' }}"
                    class="card-img-top" alt="">
                <div class="card-body ">
                    <p>Categoria</p>
                    @if (!empty($category))
                        <h5 class="card-name">{{ $category->name }}</h5>
                    @endif
                    <hr>
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-price">€ {{ $article->price }}</p>
                    <p class="card-text">{{ $article->description }}</p>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-outline-custom"
                            href="{{ route('article.show', compact('article')) }}">Dettaglio</a>
                    </div>p
                </div>
            </div>
        </div> --}}
        <div class="col-12 col-md-9 bg-custom1">

            <form class="p-2 p-md-4" wire:submit.prevent='store'>
                <x-messages />
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label @error('title') is-invalid @enderror">
                        {{ __('ui.title') }}</label>
                    <input wire:model.lazy='title' type="text" class="form-control" id="title">
                    @error('title')
                        <span class="fst-italic small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    {{-- <label for="category" class="form-label">Seleziona Categorie</label> --}}
                    <label for="category" class="form-label"> {{ __('ui.selectCategory') }}</label>
                    <select wire:model.defer='category' id="category"
                        class="form-select @error('category') is-invalid @enderror">

                        <option value="">...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                    @error('category')
                        <span class="fst-italic small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @error('images.*')
                    <span class="fst-italic small text-danger">{{ $message }}</span>
                @enderror
                {{-- temporary_images --}}
                @if (!empty($images))
                    <div class="row">
                        <div class="col-12">
                            <p> {{ __('ui.preview') }}:</p>
                            <div class="row border border-2 border-info rounded shadow py-4">
                                @foreach ($images as $key => $image)
                                    <div class="col-12 col-md-6 mt-2">
                                        <div class="mx-auto rounded d-flex flex-column justify-content-center">
                                            <img class="img-preview mx-auto" src="{{ $image->temporaryUrl() }}"
                                                alt="">
                                            <button type="button"
                                                class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                                wire:click="removeImage({{ $key }})">
                                                {{ __('ui.delete') }}</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                {{-- input images --}}
                <div class="mb-3">
                    <label for="temporary_images" class="form-label @error('temporary_images') is-invalid @enderror">
                        {{ __('ui.img') }}</label>
                    <input wire:model.lazy='temporary_images' type="file" multiple class="form-control"
                        id="temporary_images" placeholder="seleziona immagine">
                    @error('temporary_images')
                        <span class="fst-italic small text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label @error('description') is-invalid @enderror">
                        {{ __('ui.description') }}</label>
                    <textarea wire:model.lazy='description' class="form-control" id="description" rows="7" cols="30"></textarea>
                    @error('description')
                        <span class="fst-italic small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label @error('price') is-invalid @enderror">
                        {{ __('ui.price') }}</label>
                    <input wire:model.lazy='price' type="number" class="form-control" id="price">
                    @error('price')
                        <span class="fst-italic small text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button class="btn btn-outline-light" type="submit"> {{ __('ui.insertArticle') }}</button>

            </form>
        </div>

    </div>

</div>
