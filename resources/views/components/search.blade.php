<div class="container blue">
    <form action="{{ route('article.search') }}" method="GET" class="d-flex" role="search">
        <input name="searched" class="form-control me-2" type="search" placeholder="Search"
        aria-label="Search">
        <button class="btn btn-outline-custom1 border-1 border-white" type="submit">{{ __('ui.search') }}</button>
    </form>
</div>
