@extends('base')

@section('content')

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.69336719816!2d-49.05126398550691!3d-22.32743358530945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf6779a8705ff3%3A0xc734151d860373bd!2sVila+Vicentina+abrigo+para+velhos!5e0!3m2!1spt-BR!2sbr!4v1517105339989" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="container">
        <section class="form text-center px-5">
            <h2>Contato</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
            <form action="">
                <div class="row pt-4">
                    <div class="col-lg-6 col-md-12">
                        <input type="text" class="form-control form-control-lg mb-4" id="input-name" placeholder="Insira seu nome">
                        <input type="email" class="form-control form-control-lg mb-4" id="input-email" placeholder="name@example.com">
                        <select class="form-control form-control-lg mb-4" id="seila">
                            <option>Agendar visita</option>
                            <option>Agendar coleta de doação</option>
                            <option>Quero ser voluntario</option>
                        </select>
                        <div class="row">
                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">Apenas eu</label>
                            </div>
                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">Visita em grupo</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <textarea class="form-control mb-4" id="textarea" rows="6"></textarea>
                        <button type="button" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </div>
            </form>
        </section>
    </div>

@endsection
