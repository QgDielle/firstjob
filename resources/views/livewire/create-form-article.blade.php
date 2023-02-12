<div class="container-fluid my-3  rounded-2 px-md-5">
    <div class="row justify-content-around">
        
        <div class="col-12 col-md-9 bg-custom1 rounded-2">

            <form class="p-2 p-md-4" wire:submit.prevent='store'>
                <x-messages />
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label @error('title') is-invalid @enderror">
                        {{ __('ui.title') }}</label>
                    <input wire:model.lazy='title' type="text" class="form-control" id="title">
                    @error('title')
                        <span class="bg-white rounded-2 fs-6 px-2 small text-danger">{{ $message }}</span>
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
                        <span class="bg-white rounded-2 fs-6 px-2 small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @error('images.*')
                    <span class="bg-white rounded-2 fs-6 px-2 small text-danger">{{ $message }}</span>
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
                        <span class="bg-white rounded-2 fs-6 px-2 small text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label @error('description') is-invalid @enderror">
                        {{ __('ui.description') }}</label>
                    <textarea wire:model.lazy='description' class="form-control" id="description" rows="7" cols="30"></textarea>
                    @error('description')
                        <span class="bg-white rounded-2 fs-6 px-2 small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label @error('price') is-invalid @enderror">
                        {{ __('ui.price') }}</label>
                    <input wire:model.lazy='price' type="number" class="form-control" id="price">
                    @error('price')
                        <span class="bg-white rounded-2 fs-6 px-2 small text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button class="btn btn-outline-light" type="submit"> {{ __('ui.insertArticle') }}</button>

            </form>
        </div>

    </div>

</div>
