<x-layout>

    <x-header>
        Registrati
    </x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

{{--                
                <form class="bg-custom1 p-3 rounded-2" method="POST" action="{{ route('register') }}">
                    <x-error />
                    @csrf
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="Inserisci la tua email" value="{{ old('email') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Inserisci il tuo nome" value="{{ old('name') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Inserisci la password">
                    </div>
                   
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Ripeti password</label>
                        <input type="password" name="password_confirmation"class="form-control"
                            id="password_confirmation" placeholder="Conferma la password">
                    </div>

                    <button type="submit" class="btn btn-outline-accept">Register</button>
                </form>  --}}


                
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <x-error />
                    <div class="colm-form text-center">
                        <div class="form-container">
                            <h3 class="insertDati p-2">inserisci dati di registrazione</h3>
                            <div>
                                <label for="email" class="form-label"></label>
                                <input name="email" type="email" class="form-control mb-0"
                                    placeholder="Inserisci la tua Email" id="email" value="{{ old('email') }}">

                                    <label for="name" class="form-label"></label>
                                    <input type="text" name="name" class="form-control my-0" id="name"
                                        placeholder="Inserisci il tuo Nome" value="{{ old('name') }}">

                                <label for="password" class="form-label"></label>
                                <input name="password" type="password" class="form-control my-0" id="password"
                                    placeholder="Inserisci la tua Password">

                                    <label for="password_confirmation" class="form-label"></label>
                                    <input type="password" name="password_confirmation"class="form-control mt-0 mb-3"
                                        id="password_confirmation" placeholder="Conferma la tua Password">

                                <button type="submit" class="btn-login">Registrati</button>
                            </div>
                                <p href="#" class="text-muted fst-italic mt-3">Sei già un utente registrato? Allora fai click su accedi quì sotto!</p>
                                
                            <a href="{{ route('login')}}" class="btn-new w-50 mx-auto text-decoration-none">Accedi</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
