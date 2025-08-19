
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Sistem Portal Rumah Sakit PKU Muhammadiyah Sukoharjo" />
    <meta name="keywords" content="portal, portal rs, sim portal rspkuskh, pkuskh, rspkuskh, sistem pku, sistem portal rumah sakit, rumah sakit pku, pku muhammadiyah sukoharjo, pku sukoharjo">
    <meta name="author" content="Programmer RS PKU Muhammadiyah Sukoharjo" />
    <link rel="shortcut icon" href="{{ asset('images/pku/logo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/pku/logo.png') }}">
    <link rel="icon" href="{{ asset('images/pku/logo.png') }}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portal RS PKU Muhammadiyah Sukoharjo</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style-codebase2888.css?v1.0.0') }}">

</head>

<body class="nk-body" data-navbar-collapse="xl">

    {{-- LOADER --}}
    <div class="preloader">
        <div class="loader"></div>
    </div>

    <div class="nk-app-root home-codebase">

        @include('inc.menubar')

        @yield('content')

        @include('inc.footer')

        <a href="javascript: void(0);" class="scroll-top shadow animate animate-infinite animate-pulse animate-duration-2">
            <em class="icon ni ni-chevrons-up"></em>
        </a>

        {{-- <div class="nk-sticky-badge">
            <ul>
                <li>
                    <a href="javascript: void(0);" target="_blank" class="nk-sticky-badge-icon nk-sticky-badge-home"
                        data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="nk-tooltip"
                        data-bs-title="View Demo"><em class="icon ni ni-home-fill"></em>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" target="_blank" class="nk-sticky-badge-icon nk-sticky-badge-purchase" data-bs-toggle="tooltip" data-bs-custom-class="nk-tooltip" data-bs-title="###" aria-label="###">
                        <em class="icon ni ni-cart-fill"></em>
                    </a>
                </li>
            </ul>
        </div> --}}

    </div>

    {{-- JS --}}
    <script src="{{ asset('js/bundle2888.js?v1.0.0') }}"></script>
    <script src="{{ asset('js/scripts2888.js?v1.0.0') }}"></script>
</body>
</html>
