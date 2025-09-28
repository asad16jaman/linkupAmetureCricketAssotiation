<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="ZYNIX - Laravel Bootstrap 5 Premium Admin &amp; Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="laravel template, laravel admin, laravel dashboard, laravel admin panel, laravel admin template, dashboard for laravel, admin panel for laravel, template dashboard, bootstrap dashboard, dashboard template, bootstrap admin template, bootstrap 5 admin template, admin template, admin panel in laravel">

    <!-- TITLE -->
    <title>@yield('title')</title>

    <!-- FAVICON -->
    {{-- <link rel="icon" href="{{ asset('backend/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon"> --}}

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- ICONS CSS -->
    <link href="{{ asset('backend/assets/icon-fonts/icons.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('backend/assets/css/w3.css') }}">

    <!-- APP SCSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/app-BB87L1Zm.css') }}" />

    <!-- NODE WAVES CSS -->
    <link href="{{ asset('backend/assets/css/waves.min.css') }}" rel="stylesheet">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/simplebar.min.css') }}">

    <!-- PICKER CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/nano.min.css') }}">

    <!-- AUTO COMPLETE CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/autoComplete.css') }}">

    <!-- CHOICES CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/choices.min.css') }}">

    @stack('css')
</head>

<body>


    <!-- PAGE -->
    <div class="page" >
        <!-- HEADER -->
        @include('backend.layouts.header')


        @include('backend.layouts.aside')


        <div class="main-content app-content">
            @include('sweetalert::alert')
            @yield('content')
        </div>

        @include('backend.layouts.footer')

        <!-- END FOOTER -->

    </div>
    <!-- END PAGE-->

    <!-- SCRIPTS -->

    <!-- SCROLL-TO-TOP -->
    <div class="scrollToTop">
        <span class="arrow lh-1"><i class="ti ti-arrow-big-up fs-16"></i></span>
    </div>
    <div id="responsive-overlay"></div>


     <!-- MAIN JS -->
    <script src="{{ asset('backend/assets//js/main.js') }}"></script>
    <!-- POPPER JS -->
    <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- NODE WAVES JS -->
    <script src="{{ asset('backend/assets/js/waves.min.js') }}"></script>

    <!-- SIMPLEBAR JS -->
    <script src="{{ asset('backend/assets/js/simplebar.min.js') }}"></script>
   
    <!-- PICKER JS -->
    <script src="{{ asset('backend/assets/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pickr.es5.min.js') }}"></script>

    <!-- AUTO COMPLETE JS -->
    <script src="{{ asset('backend/assets/js/autoComplete.min.js') }}"></script>

    <!-- STICKY JS -->
    <script src="{{ asset('backend/assets/js/sticky.js') }}"></script>

    <!-- CUSTOM-SWITCHER JS -->
    <script type="module" src="{{ asset('backend/assets/js/custom-switcher-M1ttEsaB.js') }}"></script>

    <!-- CHOICES JS -->
    <script src="{{ asset('backend/assets/js/choices.min.js') }}"></script>

    @stack('js')

</body>

</html>
