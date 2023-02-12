@if (session('successMessage'))
    <div class="alert bg-success text-center w-md-25">
        {{ session('successMessage') }}
    </div>
@endif

@if (session('errorMessage'))
    <div class="alert alert-danger text-center  d-block mx-auto w-25 ">
        {{ session('errorMessage') }}
    </div>
@endif
