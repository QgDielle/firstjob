<div class="sticky-top subnav ">
    <ul class="d-flex justify-content-center mb-0 p-2">
        @foreach ($categories as $category)
            <li class="p-1 list-unstyled rounded-3"><a class="btn btn-3"
                href="{{ route('category.show', compact('category')) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
