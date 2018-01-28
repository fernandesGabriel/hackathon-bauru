<nav class="navbar fixed-top navbar-expand-lg navbar-light container-fluid py-3 text-center">

    <a class="navbar-brand" href="#">
        <img src="https://placeholdit.co//i/200x100?&bg=666666&fc=eeeeee&text=Image Logo" width="30" height="30" class="d-inline-block align-top" alt="">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            @foreach ($pages as $page)
                <li class="nav-item">
                    <a class="nav-link py-2" href="{{ route('home', ['name' => $page->url]) }}">{{ $page->page_title }}</a>
                </li>
            @endforeach
        </ul>
    </div>

</nav>