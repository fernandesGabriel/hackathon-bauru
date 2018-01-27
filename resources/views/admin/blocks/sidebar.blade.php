<div class="sidebar-sticky">

    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin/dashboard') }}">
                <span data-feather="home"></span>
                @lang('Dashboard')
            </a>
        </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>@lang('Pages')</span>
    </h6>
    <ul class="nav flex-column">
        @foreach ($pages as $page)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin/page/form', ['page' => $page->id]) }}">
                    <i class="fa fa-cog" aria-hidden="true"></i> {{ $page->title }}
                </a>
            </li>
        @endforeach

    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>@lang('Settings')</span>
    </h6>
    <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin/contact/form')  }}">
                <i class="fa fa-cog" aria-hidden="true"></i> @lang('Contact')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin/user')  }}">
                <i class="fa fa-cog" aria-hidden="true"></i> @lang('Users')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin/payment/form')  }}">
                <i class="fa fa-cog" aria-hidden="true"></i> @lang('Payments')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin/sponsor/form')  }}">
                <i class="fa fa-cog" aria-hidden="true"></i> @lang('Sponsors')
            </a>
        </li>
    </ul>
</div>