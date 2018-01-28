<nav class="navbar fixed-top navbar-expand-lg navbar-light container-fluid py-3 text-center">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="Vila Vicentina">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            @foreach ($menus as $menu)
                <li class="nav-item">
                    <a class="{{ $menu->data->class }}" href="{{ route('home', ['name' => $menu->path]) }}">{{ $menu->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>