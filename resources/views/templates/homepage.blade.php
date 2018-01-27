@extends('base')

@section('content')

    <div id="carousel" class="bg-gradient">
        <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/public/img/banner-1.png">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <section id="about" class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <h2 class="text-center">Vila Vicentina</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            </div>
            <button type="button" class="btn btn-primary mx-auto">Veja nossa História</button>
        </div>
    </section>

    <section id="slider-pages">
        <div class="bg-slider bg-primary inverse">
            <div id="carouselIndicators" class="carousel slide container" data-ride="carousel">
                <div class="row">
                    <div class="col-md-5">
                        <h2>Contribua com o Bazar da Vila Vicentina</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="" class="btn btn-outline-light">Saiba mais</a>
                            </div>
                            <div class="col-md-6">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="/public/images/pic.jpeg" alt="Lorem ipsum">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news" class="container">
        <h2 class="text-center">Últimas notícias</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img class="img-fluid rounded" src="https://placeholdit.co//i/400x300?&bg=666666&fc=eeeeee&text=Image (4x3)" alt="Lorem ipsum">
                <div class="text mx-4 p-4">
                    <p class="date"><small>02/03/2018 - Segunda-feira</small></p>
                    <h3>Lorem ipsum dolor sit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus..</p>
                    <a href="#">Continue lendo...</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img class="img-fluid rounded" src="https://placeholdit.co//i/400x300?&bg=666666&fc=eeeeee&text=Image (4x3)" alt="Lorem ipsum">
                <div class="text mx-4 p-4">
                    <p class="date"><small>02/03/2018 - Segunda-feira</small></p>
                    <h3>Lorem ipsum dolor sit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus..</p>
                    <a href="#">Continue lendo...</a>
                </div>
            </div>
            <div class="col-lg-4">
                <img class="img-fluid rounded" src="https://placeholdit.co//i/400x300?&bg=666666&fc=eeeeee&text=Image (4x3)" alt="Lorem ipsum">
                <div class="text mx-4 p-4">
                    <p class="date"><small>02/03/2018 - Segunda-feira</small></p>
                    <h3>Lorem ipsum dolor sit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus..</p>
                    <a href="#">Continue lendo...</a>
                </div>
            </div>
            <button type="button" class="btn btn-primary mx-auto">Todas as notícias</button>
        </div>
    </section>

    <section id="sponsor" class="bg-gradient">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>Empresas que apoiam essa causa</h2>
                </div>
                <div class="col-lg-3 col-md-6">
                    <img class="img-fluid rounded" src="https://placeholdit.co//i/400x300?&bg=666666&fc=eeeeee&text=Image (4x3)" alt="Lorem ipsum">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img class="img-fluid rounded" src="https://placeholdit.co//i/400x300?&bg=666666&fc=eeeeee&text=Image (4x3)" alt="Lorem ipsum">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img class="img-fluid rounded" src="https://placeholdit.co//i/400x300?&bg=666666&fc=eeeeee&text=Image (4x3)" alt="Lorem ipsum">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img class="img-fluid rounded" src="https://placeholdit.co//i/400x300?&bg=666666&fc=eeeeee&text=Image (4x3)" alt="Lorem ipsum">
                </div>
            </div>
        </div>
    </section>

@endsection
