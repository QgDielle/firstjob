<form class='d-inline' action="{{ route('set_language_locale', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="45" height="45" />
    </button>
</form>
