<x-layout>
    <x-header>
        Login 
    </x-header>
    <div class="container mx-auto my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                
{{--   <form class="bg-custom1 p-3 rounded-2" method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-error />
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>

                    <button type="submit" class="btn btn-outline-light">Login</button>
                    <a class="btn btn-outline-accept" href="{{route('register')}}">Registrati</a>
                </form> --}}

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
                                <a href="#" class="text-muted fst-italic">password dimenticata?</a>
                                
                            <a href="{{ route('register')}}" class="btn-new w-50 mx-auto text-decoration-none">Crea nuovo account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
