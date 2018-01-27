<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0 py-3" href="#">{{ config('app.name', 'Hackathon') }}</a>
    <ul class="nav nav-pills">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                @lang('Hello') {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-item">
                    <form class="" action="{{ route('logout') }}" method="post">
                        {{ csrf_field() }}
                        <button type="submit" name="logout" class="btn btn-link">@lang('Logout')</button>
                    </form>
                </div>
            </div>
        </li>
    </ul>
</nav>