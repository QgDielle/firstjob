<x-layout>

    <x-header>
        {{ __('ui.ourTeam') }}
    </x-header>
    <div class="container my-5">

        <div class="aboutus row">

            <div class="col-12 col-md-4 my-2">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-2">
                            <img src="../media/thisisus/gian.png" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://www.linkedin.com/in/giangabriele-de-luca/" target="_blank">Giangabriele De Luca</a>
                            </h3>
                            <p>Aulab Student and</p><br>
                            <p><b> Junior Full-Stack Developer</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-2">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-2">
                            <img src="../media/thisisus/antonio.png" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://www.linkedin.com/in/antonioneri90/" target="_blank">Antonio Neri</a>
                            </h3>
                            <p>Aulab Student and</p><br>
                            <p><b> Junior Full-Stack Developer</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-2">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-2">
                            <img src="../media/thisisus/flavio.png" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://www.linkedin.com/in/flavioscimeca1/" target="_blank">Flavio Scimeca</a>
                            </h3>
                            <p>Aulab Student and</p><br>
                            <p><b> Junior Full-Stack Developer</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-2">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-2">
                            <img src="../media/thisisus/alfredo.png" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://www.linkedin.com/in/alfredo-coppola-953365262/" target="_blank">Alfredo Coppola</a>
                            </h3>
                        <p>Aulab Student and</p><br>
                            <p><b> Junior Full-Stack Developer</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-2">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-2">
                            <img src="../media/thisisus/francesco.png" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://www.linkedin.com/in/francesco-esposito-824b9b264" target="_blank">Francesco Esposito</a>
                            </h3>
                           <p>Aulab Student and</p><br>
                            <p><b> Junior Full-Stack Developer</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-2">
                <div class="card">
                    <div class="face face1">
                        <div class="content p-1">
                            <img src="https://picsum.photos/300/200" alt="">
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <h3>
                                <a href="https://www.linkedin.com/in/giulia-floris-361a89237/" target="_blank">Giulia Floris</a>
                            </h3>
                            <p>Aulab Student and</p><br>
                            <p><b> Junior Full-Stack Developer</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <x-header>
            {{ __('ui.workWithUs') }}
        </x-header>


        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <form action="{{ route('revisor.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="message" class="form-label"></label>
                            <textarea name="message" class="form-control" id="message" rows="3" cols="70"> {{ __('ui.mess') }}</textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox">
                            <label class="form-check-label" for="checkbox"> {{ __('ui.becomeR') }}</label>
                        </div>
                        <button type="submit" class="btn btn-outline-custom"> {{ __('ui.sendR') }}</button>
                    </form>

                </div>
            </div>
        </div>

    </x-layout>
