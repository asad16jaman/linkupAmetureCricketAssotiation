

<style>
    .user-box {
        display: flex;
        align-items: center;
        height: 60px;
        border-left: 1px solid #f0f0f0;
        border-right: 1px solid #f0f0f0;
    }

    .user-info p {
        margin-bottom: 0;
        color: #fff;
    }

    .user-img {
        width: 50px;
        height: 50px;
        object-fit: cover;
    }

    .app-header {
        background-color: #021216 !important;
        color: #fff !important;
    }
</style>

<header class="app-header sticky" id="header">
    <div class="main-header-container container-fluid d-flex justify-content-between align-items-center">
        <div class="header-content-left d-flex align-items-center gap-3">
            <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link" data-bs-toggle="sidebar"
                href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon menu-btn" width="32" height="32"
                    fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
                    </path>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon menu-btn-close" width="32"
                    height="32" fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
                    </path>
                </svg>
            </a>
            <a href="{{ url('/') }}" target="_blank" class="header-link text-white fw-bold">
                Home
            </a>
        </div>


        <ul class="header-content-right d-flex align-items-center mb-0 list-unstyled">
            <li class="header-element d-md-none d-block">
                <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                    data-bs-target="#header-responsive-search">
                    <i class="bi bi-search header-link-icon"></i>
                </a>
            </li>

            <li class="header-element dropdown border-start">
                <div class="user-box dropdown px-3">
                    <a class="d-flex align-items-center nav-link dropdown-toggle gap-3" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="user-img rounded-circle" src="{{ asset('frontend/images/ballsk.png') }}"
                            alt="User Avatar">
                        <div class="user-info">
                            <p class="user-name">{{ $ws->title }}</p>
                            <p class="designattion">Admin</p>
                        </div>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm header-profile-dropdown">
                        <li>
                            <a class="btn btn-primary btn-sm w-100" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                    <path d="M9 12h12l-3 -3" />
                                    <path d="M18 15l3 -3" />
                                </svg> Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</header>
