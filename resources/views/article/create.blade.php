<x-layout>
    
    <x-header>
        Inserisci annuncio
    </x-header>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form  action="">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" >
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
                        <label for="description" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="description" rows="7" cols="30"></textarea>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
</x-layout>
