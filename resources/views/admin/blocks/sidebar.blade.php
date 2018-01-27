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
                   {{ $page->title }}
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
               @lang('Contact')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin/user')  }}">
                @lang('Users')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin/payment/form')  }}">
                @lang('Payments')
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin/sponsor/form')  }}">
                @lang('Sponsors')
            </a>
        </li>
    </ul>
</div>