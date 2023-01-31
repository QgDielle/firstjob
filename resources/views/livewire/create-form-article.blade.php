<div>

    <form wire:submit.prevent='store'>
        @csrf
        <x-messages />
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input wire:model='title' type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            {{-- <label for="category" class="form-label">Seleziona Categorie</label> --}}
            <select wire:model.defer='category' id="category" class="form-select" aria-label="Default select example">
                <option selected >Seleziona Categoria</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Messaggio</label>
            <textarea wire:model='description' class="form-control" id="description" rows="7" cols="30"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input wire:model='price' type="number" class="form-control" id="price">
        </div>

        <button class="btn btn-outline-primary" type="submit">submit</button>

    </form>

</div>
