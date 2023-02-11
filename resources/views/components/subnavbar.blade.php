<nav class="bg-custom1 navbar  sticky-bottom">
    <div class="container-fluid justify-content-center pt-2">

        <div class="container d-flex align-items-center">
            <div>
                <button class="btn btn-outline-custom1 border-1 border-white" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">{{ __('ui.categories') }}</button>
            </div>

            <x-search />

        </div>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample05">
            <ul class="row justify-content-center my-3 p-0">
                @foreach ($categories as $category)
                <div class="col-3 col-md-1 me-3">

                    <a class="btn btn-outline-custom1 mb-1"
                    href="{{route('category.show', compact('category'))}}">{{ $category->name }}</a>

                </div>
                @endforeach
            </ul>
        </div>


    </div>
</nav>
