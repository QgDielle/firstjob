<x-layout>

    <x-header>
        Chi Siamo
    </x-header>
    <div class="container my-5">

        <div class="aboutus row">

            <div class="col-12 col-md-4 my-3">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-2">
                            <img src="https://picsum.photos/300/200" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://www.linkedin.com/in/adamdipinto/" target="_blank">_adamdipinto</a>
                            </h3>
                            <p>This is where I network and build my professional protfolio.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-3">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-2">
                            <img src="https://picsum.photos/300/200" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://twitter.com/AdamDipinto" target="_blank">@AdamDipinto</a>
                            </h3>
                            <p>This is where I read news and network with different social groups.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-3">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-2">
                            <img src="https://picsum.photos/300/200" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://github.com/atom888" target="_blank">atom888</a>
                            </h3>
                            <p>This is where I share code and work on projects.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-3">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-2">
                            <img src="https://picsum.photos/300/200" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://www.linkedin.com/in/adamdipinto/" target="_blank">_adamdipinto</a>
                            </h3>
                            <p>This is where I network and build my professional protfolio.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-3">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-2">
                            <img src="https://picsum.photos/300/200" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://twitter.com/AdamDipinto" target="_blank">@AdamDipinto</a>
                            </h3>
                            <p>This is where I read news and network with different social groups.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-3">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-1">
                            <img src="https://picsum.photos/300/200" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://github.com/atom888" target="_blank">atom888</a>
                            </h3>
                            <p>This is where I share code and work on projects.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <x-header>
            Lavora con noi
        </x-header>


        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <form action="{{ route('revisor.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="message" class="form-label">Inserisci il tuo messaggio</label>
                            <textarea name="message" class="form-control" id="message" rows="3" cols="70"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox">
                            <label class="form-check-label" for="checkbox">diventa revisore</label>
                        </div>
                        <button type="submit" class="btn btn-outline-custom">invia richiesta</button>
                    </form>

                </div>
            </div>
        </div>

    </x-layout>
