<x-layout>
    <x-header>
        {{ __('ui.articleRevisioned') }}
    </x-header>
    <div class="container d-flex justify-content-center">
        <a class="btn btn-outline-refuse me-2" href="{{url()->previous()}}"><i class="bi bi-backspace">{{ __('ui.back') }}</i></a>
    </div>
    <div class="container-fluid my-5">
        <div class="container">
            <div class="row align-items-center text-center">
                <table class="content-table table-bordered bg-white">
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
                                                <button type="submit" class="btn btn-outline-custom2">{{ __('ui.pause') }}</button>
                                            </form>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            @if ($article->is_accepted == false)
                                                <form method="POST"
                                                    action="{{ route('revisor.accept', ['article' => $article]) }}">
                                                    @method('PATCH')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-accept">{{ __('ui.restore') }}</button>
                                                </form>
                                            @else
                                                <form method="POST"
                                                    action="{{ route('revisor.decline', ['article' => $article]) }}">
                                                    @method('PATCH')
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger">{{ __('ui.remove') }}</button>
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
