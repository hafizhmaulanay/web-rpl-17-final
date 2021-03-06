<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16" />

    <title>@yield('title')</title>

    {{-- style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                <img src="/images/admin.svg" alt="" class="my-4 w-75" />
                </div>
                <div class="list-group list-group-flush">
                <a
                    href="{{ route('admin-dashboard') }}"
                    class="list-group-item list-group-item-action{{ request()->is('admin') ? ' active' : '' }}"
                >
                    Dashboard
                </a>
                <a
                    href="{{ route('ebook.index') }}"
                    class="list-group-item list-group-item-action{{ request()->is('admin/ebook*') ? ' active' : '' }}"
                >
                    E-books
                </a>
                <a
                    href="{{ route('tutorial.index') }}"
                    class="list-group-item list-group-item-action{{ request()->is('admin/tutorial*') ? ' active' : '' }}"
                >
                    Tutorials
                </a>
                <a
                    href="{{ route('project.index') }}"
                    class="list-group-item list-group-item-action{{ request()->is('admin/project*') ? ' active' : '' }}"
                >
                    Projects
                </a>
                <a
                    href="{{ route('user.index') }}"
                    class="list-group-item list-group-item-action{{ request()->is('admin/user*') ? ' active' : '' }}"
                >
                    Users
                </a>
                <a
                    href="{{ route('account.index') }}"
                    class="list-group-item list-group-item-action{{ request()->is('admin/account*') ? ' active' : '' }}"
                >
                    Account
                </a>
                <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </div>
            </div>

            {{-- content --}}
            @yield('content')

        </div>
    </div>
    
    {{-- style --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>