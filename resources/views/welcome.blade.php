<x-layout>

    <x-header>
        Benvenuto a tutti
    </x-header>


    @auth
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <a class="btn btn-primary" href="">Inserisci annuncio</a>

            </div>
        </div>
    </div>
    @endauth

</x-layout>
