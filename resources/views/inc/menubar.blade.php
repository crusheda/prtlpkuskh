<header class="nk-header">
    <div class="nk-header-main nk-navbar-main">
        <div class="container">
            <div class="nk-header-wrap">
                <div class="nk-header-logo">
                    <a href="{{ route('portal.index') }}" class="logo-link">
                        <div class="logo-wrap">
                            {{-- <img class="logo-img logo-light" src="{{ asset('images/pku/kop.png') }}" alt="brand-logo"> --}}
                            <img class="logo-img logo-dark" src="{{ asset('images/pku/kop.png') }}" alt="brand-logo" width="230">
                        </div>
                    </a>
                </div>

                @include('inc.navbar')

                <div class="nk-header-action">
                    <ul class="nk-btn-group gap-2 sm justify-content-center">
                        <li class="d-none d-md-block">
                            <a href="https://rspkusukoharjo.com/" class="btn btn-outline-dark text-nowrap text-nowrap rounded">
                                <em class="icon ni ni-bag-fill"></em><span>Web RS</span>
                            </a>
                        </li>
                        <li class="nk-navbar-toggle">
                            <button class="btn btn-outline-primary navbar-toggle rounded-2 p-2 h-100">
                                <e class="icon ni ni-menu"></e>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
