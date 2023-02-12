<x-layout>
    <x-header>
        Login 
    </x-header>
    <div class="container mx-auto my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-error />
                    <div class="colm-form text-center">
                        <div class="form-container">
                            <h3 class="insertDati">inserisci dati di accesso</h3>
                            <div>
                                <label for="email" class="form-label"></label>
                                <input name="email" type="email" class="form-control mb-0"
                                    placeholder="Inserisci la tua Email" id="email" value="{{ old('email') }}">
                                <label for="password" class="form-label"></label>
                                <input name="password" type="password" class="form-control mt-0" id="password"
                                    placeholder="Inserisci la tua Password">

                                <button type="submit" class="btn-login">Accedi</button>
                            </div>
                                
                                
                            <a href="{{ route('register')}}" class="btn-new w-50 mx-auto text-decoration-none">Registrati</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
