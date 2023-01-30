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
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>

                    <button type="submit" class="btn-2 p-2 w-25 mt-4 rounded-2">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
