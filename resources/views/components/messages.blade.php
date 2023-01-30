@if (session('successMessage'))
    <div class="alert alert-success text-center">
        {{ session('successMessage') }}
    </div>
@endif

@if (session('errorMessage'))
    <div class="alert alert-danger text-center">
        {{ session('errorMessage') }}
    </div>
@endif
