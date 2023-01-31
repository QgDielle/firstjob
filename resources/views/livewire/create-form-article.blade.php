<div>
  <form wire:submit.prevent='store'>
    @csrf
    <x-messages />
    <div class="mb-3">
      <label for="title" class="form-label @error('title') is-invalid @enderror">Titolo</label>
      <input wire:model.lazy='title' type="text" class="form-control" id="title">
      @error('title')
      <span class="fst-italic small text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      {{-- <label for="category" class="form-label">Seleziona Categorie</label> --}}
      <select wire:model.defer='category' id="category" class="form-select @error('category') is-invalid @enderror">
        
        <option selected>Seleziona Categoria</option>
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        
      </select>
      @error('category')
      <span class="fst-italic small text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="description" class="form-label @error('description') is-invalid @enderror">Messaggio</label>
      <textarea wire:model.lazy='description' class="form-control" id="description" rows="7" cols="30"></textarea>
      @error('description')
      <span class="fst-italic small text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="price" class="form-label @error('price') is-invalid @enderror">Prezzo</label>
      <input wire:model.lazy='price' type="number" class="form-control" id="price">
      @error('price')
      <span class="fst-italic small text-danger">{{$message}}</span>
      @enderror
    </div>
    
    <button class="btn btn-outline-primary" type="submit">submit</button>
    
  </form>
  
</div>
