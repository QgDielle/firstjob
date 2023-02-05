<x-layout>

    <x-header>
        Lavora con noi
    </x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{ route('revisor.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="message" class="form-label">Inserisci il tuo messaggio</label>
                        <textarea name="message" class="form-control" id="message" rows="3" cols="70"></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox">
                        <label class="form-check-label" for="checkbox">diventa revisore</label>
                    </div>
                    <button type="submit" class="btn btn-outline-custom">invia richiesta</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>
