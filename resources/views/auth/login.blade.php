<x-layout>
    <x-header>
        Login
    </x-header>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 ">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-error />
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
