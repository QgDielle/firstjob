<div class="sticky-top bg-dark">
    <ul class="d-flex justify-content-around border-2 border-bottom pb-2">
        @foreach ($categories as $category)
            <li class="p-1 list-unstyled rounded-3"><a class="btn btn-outline-warning "
                    href="{{ route('category.show', compact('category')) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
