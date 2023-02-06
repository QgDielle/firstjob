<div class="bg-custom1 p-2 rounded-2">

    <form wire:submit.prevent='store'>
        <x-messages />
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label @error('title') is-invalid @enderror">Titolo</label>
            <input wire:model.lazy='title' type="text" class="form-control" id="title">
            @error('title')
                <span class="fst-italic small text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            {{-- <label for="category" class="form-label">Seleziona Categorie</label> --}}
            <label for="category" class="form-label">Seleziona categoria</label>
            <select wire:model.defer='category' id="category"
                class="form-select @error('category') is-invalid @enderror">

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
            @error('category')
                <span class="fst-italic small text-danger">{{ $message }}</span>
            @enderror
        </div>
        {{-- temporary_images --}}
        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>Anteprima:</p>
                    <div class="row border border-4 border-info rounded shadow py-4">
                        @foreach ($images as $key => $image)
                            <div class="col my-3">
                                <div class="mx-auto shadow rounded bg-success"><img class="img-preview"
                                        src="{{ $image->temporaryUrl() }}" alt=""></div>
                                <button type="button" class="btn btn-danger shadow d-black text-center mt-2 mx auto"
                                    wire:click="removeImage({{ $key }})">Cancella</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        {{-- input images --}}
        <div class="mb-3">
            <label for="temporary_images"
                class="form-label @error('temporary_images') is-invalid @enderror">Immagini</label>
            <input wire:model.lazy='temporary_images' type="file" multiple class="form-control" id="temporary_images"
                placeholder="seleziona immagine">
            @error('temporary_images')
                <span class="fst-italic small text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label @error('description') is-invalid @enderror">Messaggio</label>
            <textarea wire:model.lazy='description' class="form-control" id="description" rows="7" cols="30"></textarea>
            @error('description')
                <span class="fst-italic small text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label @error('price') is-invalid @enderror">Prezzo</label>
            <input wire:model.lazy='price' type="number" class="form-control" id="price">
            @error('price')
                <span class="fst-italic small text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button class="btn btn-outline-light" type="submit">inserisci articolo</button>

    </form>

</div>
