<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="ZYNIX - Laravel Bootstrap 5 Premium Admin & Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="laravel template, laravel admin, laravel dashboard, laravel admin panel, laravel admin template, dashboard for laravel, admin panel for laravel, template dashboard, bootstrap dashboard, dashboard template, bootstrap admin template, bootstrap 5 admin template, admin template, admin panel in laravel">

    <!-- TITLE -->
    <title>{{ config('app.name', 'Dewbn') }}</title>

    <!-- FAVICON -->
    <link rel="icon" href="backend/assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- APP SCSS -->
   
    <link rel="stylesheet" href="backend/assets/css/app-BB87L1Zm.css" />

    <!-- ICONS CSS -->
    <link href="{{ asset('backend/assets/icon-fonts/icons.css') }}" rel="stylesheet">




</head>

<body class="authentication-background authenticationcover-background position-relative" id="particles-js">



    <div class="container">
        <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="mb-3 d-flex justify-content-center auth-logo">
                    {{-- <a href="{{ url('/') }}"> 
                        {{ config('app.name', 'Dewbn') }}
                        <img src="{{asset("build/assets/images/brand-logos/desktop-dark.png")}}" alt="logo" class="desktop-dark"> 
                    </a>  --}}
                </div>
                <div class="card custom-card my-4 border z-3 position-relative">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <span class="auth-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="password">
                                        <path fill="#6446fe"
                                            d="M59,8H5A1,1,0,0,0,4,9V55a1,1,0,0,0,1,1H59a1,1,0,0,0,1-1V9A1,1,0,0,0,59,8ZM58,54H6V10H58Z"
                                            class="color1d1f47 svgShape"></path>
                                        <path fill="#6446fe"
                                            d="M36,35H28a3,3,0,0,1-3-3V27a3,3,0,0,1,3-3h8a3,3,0,0,1,3,3v5A3,3,0,0,1,36,35Zm-8-9a1,1,0,0,0-1,1v5a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V27a1,1,0,0,0-1-1Z"
                                            class="color0055ff svgShape"></path>
                                        <path fill="#6446fe"
                                            d="M36 26H28a1 1 0 0 1-1-1V24a5 5 0 0 1 10 0v1A1 1 0 0 1 36 26zm-7-2h6a3 3 0 0 0-6 0zM32 31a1 1 0 0 1-1-1V29a1 1 0 0 1 2 0v1A1 1 0 0 1 32 31z"
                                            class="color0055ff svgShape"></path>
                                        <path fill="#6446fe"
                                            d="M59 8H5A1 1 0 0 0 4 9v8a1 1 0 0 0 1 1H20.08a1 1 0 0 0 .63-.22L25.36 14H59a1 1 0 0 0 1-1V9A1 1 0 0 0 59 8zm-1 4H25l-.21 0a1.09 1.09 0 0 0-.42.2L19.73 16H6V10H58zM50 49H14a1 1 0 0 1-1-1V39a1 1 0 0 1 1-1H50a1 1 0 0 1 1 1v9A1 1 0 0 1 50 49zM15 47H49V40H15z"
                                            class="color1d1f47 svgShape"></path>
                                        <circle cx="19.5" cy="43.5" r="1.5" fill="#6446fe"
                                            class="color0055ff svgShape"></circle>
                                        <circle cx="24.5" cy="43.5" r="1.5" fill="#6446fe"
                                            class="color0055ff svgShape"></circle>
                                        <circle cx="29.5" cy="43.5" r="1.5" fill="#6446fe"
                                            class="color0055ff svgShape"></circle>
                                        <circle cx="34.5" cy="43.5" r="1.5" fill="#6446fe"
                                            class="color0055ff svgShape"></circle>
                                        <circle cx="39.5" cy="43.5" r="1.5" fill="#6446fe"
                                            class="color0055ff svgShape"></circle>
                                        <circle cx="44.5" cy="43.5" r="1.5" fill="#6446fe"
                                            class="color0055ff svgShape"></circle>
                                        <path fill="#6446fe"
                                            d="M60 9a1 1 0 0 0-1-1H28.81l2.37-2.37A19.22 19.22 0 0 1 60 31zM35.19 56l-2.37 2.37A19.22 19.22 0 0 1 4 33V55a1 1 0 0 0 1 1z"
                                            opacity=".3" class="color0055ff svgShape"></path>
                                    </svg>
                                </span>
                            </div>
                            <p class="h4 fw-semibold mb-0 text-center">Sign In</p>
                            {{-- <p class="mb-3 text-muted fw-normal text-center">Welcome back Jhon !</p> --}}
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <label for="email" class="form-label text-default">Email</label>
                                        <div class="position-relative">
                                            <input id="email" type="email"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                autofocus placeholder="Enter Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-2">
                                        <label for="signin-password" class="form-label text-default d-block">Password

                                            {{-- @if (Route::has('password.request'))
                                                    <a class="float-end  link-danger op-5 fw-medium fs-12" href="{{ route('password.request') }}">
                                                    Forget Password ?
                                                    </a>
                                                @endif --}}
                                        </label>
                                        <div class="position-relative">

                                            <input id="signin-password" type="password"
                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <a href="javascript:void(0);" class="show-password-button text-muted"
                                                onclick="createpassword('signin-password',this)" id="button-addon2"><i
                                                    class="ri-eye-off-line align-middle"></i></a>
                                        </div>
                                        {{-- <div class="mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label text-muted fw-normal fs-12" for="defaultCheck1">
                                                    Remember password ?
                                                </label>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                </div>
                            </form>
                            {{-- <div class="text-center mb-0">
                                <p class="text-muted mt-3 mb-0">Dont have an account? <a href="{{ route('register') }}" class="text-primary">Sign Up</a></p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MAIN JS -->
    <script src="{{ asset('backend/assets/js/authentication-main.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Basic Password JS -->
    <link rel="modulepreload" href="{{ asset('backend/assets/js/basic-password-Cj2bfq72.js') }}" />

    <script type="module" src="backend/assets/js/basic-password-Cj2bfq72.js"></script>

    <!-- Show Password JS -->
    <script src="{{ asset('backend/assets/js/show-password.js') }}"></script>

</body>

</html>
