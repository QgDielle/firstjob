<x-layout>

    <x-header>
        Registrati
    </x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{ route('register') }}">
                    <x-error />
                    @csrf
                    {{-- email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    {{-- name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    {{-- password --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    {{-- password_confirmation --}}
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Ripeti passwowrd</label>
                        <input type="password" name="password_confirmation"class="form-control"
                            id="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
