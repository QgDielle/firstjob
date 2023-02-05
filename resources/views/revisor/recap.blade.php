<x-layout>
    <x-header>
        Lista articoli revisionati
    </x-header>
    <div class="container d-flex justify-content-center">
        <a class="btn btn-outline-refuse me-2" href="{{url()->previous()}}"><i class="bi bi-backspace"></i></a>
    </div>
    <div class="container-fluid my-5">
        <div class="container">
            <div class="row align-items-center text-center">
                <table class="content-table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Category
                            </th>
                            <th>
                                Name creator
                            </th>
                            <th class="m-0">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles_recap as $article)
                            <tr>
                                <td>
                                    <span class="m-0">{{ $article->id }}</span>
                                </td>
                                <td>
                                    <p class="m-0">{{ $article->title }}</p>
                                </td>
                                <td>
                                    <p class="m-0">{{ $article->category->name }}</p>
                                </td>
                                <td>
                                    <p class="m-0">{{ $article->user->name }}</p>
                                </td>
                                <td>
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-md-6">
                                            <form method="POST"
                                                action="{{ route('revisor.suspend', ['article' => $article]) }}">
                                                @method('PATCH')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-custom2">Sospendi</button>
                                            </form>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            @if ($article->is_accepted == false)
                                                <form method="POST"
                                                    action="{{ route('revisor.accept', ['article' => $article]) }}">
                                                    @method('PATCH')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-accept">Ripristina</button>
                                                </form>
                                            @else
                                                <form method="POST"
                                                    action="{{ route('revisor.decline', ['article' => $article]) }}">
                                                    @method('PATCH')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-refuse">Rimuovi</button>
                                                </form>
                                            @endif
                                        </div>
                                        
                                       
                                    </div>
                                </td>
    
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-layout>
