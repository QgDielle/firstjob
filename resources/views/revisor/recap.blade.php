<x-layout>
    {{-- @dd($articles_recap) --}}

    {{-- @dd($articles_recap) --}}
    <x-header>
        Lista articoli revisionati
    </x-header>

    <div class="container justify-content-around my-5">
        <div class="row align-items-center text-center p-5">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>
                            id
                        </th>
                        <th>
                            photo
                        </th>
                        <th>
                            title
                        </th>
                        <th>
                            price
                        </th>
                        <th>
                            name creator
                        </th>
                        <th>
                            action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles_recap as $article)
                        <tr>
                            <td>
                                <span>{{ $article->id }}</span>
                            </td>
                            <td>
                                <img class="rounded-3" src="https://picsum.photos/50" alt="placeholder">
                            </td>
                            <td>
                                <p>{{ $article->title }}</p>
                            </td>
                            <td>
                                <p>{{ $article->price }}</p>
                            </td>
                            <td>
                                <p>{{ $article->user->name }}</p>
                            </td>
                            <td>
                                <div class="d-flex gap-5 w-100 justify-content-center">
                                    @if ($article->is_accepted == false)
                                        <form method="POST"
                                            action="{{ route('revisor.accept', ['article' => $article]) }}">
                                            @method('PATCH')
                                            @csrf
                                            <button type="submit" class="btn btn-success my-1">reinserisci
                                                articoli</button>
                                        </form>
                                    @else
                                        <form method="POST"
                                            action="{{ route('revisor.decline', ['article' => $article]) }}">
                                            @method('PATCH')
                                            @csrf
                                            <button type="submit" class="btn btn-danger my-1">rimuovi articolo</button>
                                        </form>
                                    @endif
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>
