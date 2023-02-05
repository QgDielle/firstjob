<x-layout>

    <x-header>
        Registrati
    </x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="bg-custom1 p-3 rounded-2" method="POST" action="{{ route('register') }}">
                    <x-error />
                    @csrf
                    {{-- email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci la tua email" value="{{old('email')}}">
                    </div>
                    {{-- name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Inserisci il tuo nome" value="{{old('name')}}">
                    </div>
                    {{-- password --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Inserisci la password">
                    </div>
                    {{-- password_confirmation --}}
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Ripeti password</label>
                        <input type="password" name="password_confirmation"class="form-control" id="password_confirmation" placeholder="Conferma la password">
                    </div>

                    <button type="submit" class="btn btn-outline-accept">Register</button>
                    <a class="btn btn-outline-light" href="{{route('login')}}">Accedi</a>
                </form>
            </div>
        </div>
    </div>

</x-layout>
