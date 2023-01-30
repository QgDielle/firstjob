<div>
    
    <form  action="">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input wire:model='title' type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            {{-- <label for="category" class="form-label">Seleziona Categorie</label> --}}
            <select id="category" class="form-select" aria-label="Default select example">
                <option selected>Seleziona Categoria</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">One</option>
                <option value="5">Two</option>
                <option value="6">Three</option>
                <option value="7">One</option>
                <option value="8">Two</option>
                <option value="9">Three</option>
                <option value="10">Three</option>
                
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
        
    </form>
    
</div>
