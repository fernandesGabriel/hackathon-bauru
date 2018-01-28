<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <h3>Contato</h3>
            <p>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                </span>
                {{ array_get($footer, 'settings_phonenumber.value') }}
            </p>
            {{ array_get($footer, 'settings_address.value') }}
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
            </span>
            <p>Vila Vicentina Abrigo para Velhos - Rua Jorge Pimentel, 2-5 Vila Engler <br>CEP 17065-010 Bauru/SP</p>
            <p>vilavicentina@terra.com.br</p>
            <p>gerencia@vilavicentinabauru.com.br</p>
        </div>
        <div class="col-lg-4 col-md-12">
            {{ array_get($footer, 'settings_visits.value') }}
            <h3>Visitas</h3>
            <p>Todos os dias da semana <br>Horário: das 14h às 16h</p>
            <p>Ligue e agende um horário de visita</p>
        </div>
        <div class="col-lg-4 col-md-12">
            <h3>Nos siga no Facebook</h3>
            <p>[facebook]</p>
        </div>
    </div>
</div>