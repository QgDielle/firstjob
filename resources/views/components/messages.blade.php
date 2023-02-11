@if (session('successMessage'))
    <div class="alert bg-success text-center d-block mx-auto">
        {{ session('successMessage') }}
    </div>
@endif

@if (session('errorMessage'))
    <div class="alert alert-danger text-center">
        {{ session('errorMessage') }}
    </div>
@endif
