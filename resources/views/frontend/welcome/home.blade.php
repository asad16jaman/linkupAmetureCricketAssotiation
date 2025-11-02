@extends('frontend.layouts.app')
@section('title')
    {{ optional($company)->name }} | Welcome
@endsection
@push('css')
    <style>
        .owl-nav {
            display: flex;
            position: absolute;
            width: 100%;
            top: 36%;
        }

        .carousel_indecator {
            background-color: #bd9b0c;
            color: #ffffff;
            z-index: 9999;
            font-size: 30px;
            border-radius: 50%;
            width: 47px;
            height: 47px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .handleCaption {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .liveCardImgSize{
            width: 41px;
            height: 25px;
            object-fit: contain;
        }

        .join-us-button {
            font-size: 18px;
            background: #bd9b0c;
            display: inline-block;
            padding: 7px 12px;
            border-radius: 11px;
            margin-top: 41px;
        }

        .banner-part-content .carousel-caption {
            background: rgba(0, 0, 0, 0.55);
            padding: 10px 15px;
            border-radius: 8px;
            max-width: 100%;
            left: 0px !important;
            right: 0px !important;
            top: 0px !important;
            bottom: 0px !important;
        }

        .banner-part-content h1 {
            font-size: 40px;
            line-height: 1.3;
        }

        .banner-part-content p {
            font-size: 16px;
        }

        .carousel-inner img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .border-container {
            position: relative;
            padding-bottom: 10px;
            overflow: hidden;
            margin-bottom: 50px;
        }

        .border-container::after {
            content: "";
            position: absolute;
            width: 326px;
            height: 126px;
            border: 3px solid #ffdc0c;
            border-radius: 66%;
            left: -99px;
            bottom: -113px;
        }

       

        .welcome-section {
            width: 100%;
            padding: 100px 0px;
            background:
                linear-gradient(to right, rgb(0 0 0 / 91%), rgb(0 0 0 / 91%)),
                url("{{ optional($wellcomeNode)->image_1 ? asset('storage/' . $wellcomeNode->image_1) : asset('frontend/images/welcome/bg.jpg') }}") no-repeat center center / cover;
        }

        .servcard {
            padding: 35px 16px;
            border-radius: 30px;
        }

        .bg-yellow {
            background-color: #0f66dd;
            color: #fff
        }

        .btn-white {
            background: #ffffff;
            color: #000;
        }
        .btn-white:hover{
            background: #ffffff;
            color: #000;
        }

        .f-12 {
            font-size: 13px;
        }

        .py {
            padding: 70px 0px;
        }

        .f-30 {
            font-size: 30px;
        }

        .bg-yellow {
            background-color: #0f66dd;
            color: #fff;
        }

        .servcard {

            padding: 35px 16px;
            border-radius: 30px;
        }

        .servcard h3 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .servcard p {
            font-size: 16px;
            margin-bottom: 26px;
        }

        .servcard a {
            padding: 8px 22px;
            border-radius: 19px;
            font-weight: 600;
        }

        .f-18 {
            font-size: 18px;
        }

        .owl-prev:after, .owl-next:after {
            content: "";
            font-family: "FontAwesome";
            position: absolute;
            font-size: 12px;
            color: #fff !important;
            background: #112345db;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card_title_style{
            font-size: 20px;
            margin-top: 10px;
            color: #112345;
            font-weight: 600;
        }
        .card-body-style{
            color: #000000;
            font-size: 12px;
            height: 53px;
        }
        .welcome-border{
            border-left: 10px solid #0f66dd;
            border-right: 10px solid #0f66dd;
        }

        @media screen and (min-width: 1500px) {
            .carousel-inner img {
                height: 715px !important;
            }
        }

        @media (min-width: 1201px) and (max-width: 1440px) {

            .carousel-inner img {
                height: 550px;
            }


        }

        /* Responsive */
        @media (max-width: 768px) {
             .owl-prev:after,
            .owl-next:after {
                content: "";
                font-family: "FontAwesome";
                position: absolute;
                font-size: 13px;
                color: #000 !important;
                padding: 0px 0px;
                border-radius: 50%;
                background: #fff;
            }
            .owl-nav {
                display: flex;
                position: absolute;
                width: 100%;
                align-items: center;
            }
            .banner-part-content h1 {
                font-size: 1.2rem;
            }

            .carousel-inner img {
                max-height: 280px !important;
            }

            .carousel-caption {
                font-size: 0.9rem;
                padding: 8px 10px;
            }

            .banner-part-content .btn-danger {
                font-size: 0.8rem;
                padding: 6px 12px;
            }

            .card {
                margin-top: 20px;
            }
        }

        @media screen and (max-width:500px) {
            .welcome_font {
                font-size: 20px;
                font-weight: 900;
            }

            .auth_message h1 {
                font-size: 14px;
                font-weight: 900;
                margin-bottom: 21px;
            }

            .auth_message p {
                font-size: 12px;
            }

            .f-12 {
                font-size: 12px;
            }

            .crickter_voice {
                font-size: 16px;
            }
            .slider_title{
                font-size: 15px !important;
            }
            .slider-body{
                font-size: 11px !important;
            }
            .join-us-button{
                margin-top: 7px;
                font-size: 12px;
                background: #bd9b0c;
                display: inline-block;
                padding: 4px 10px;
                border-radius: 4px;
            }
            .carousel_indecator {
                font-size: 15px;
                width: 30px;
                height: 30px;
            }
        }
        
    </style>
@endpush

@section('content')
    <section class="banner-part-content w-100 w3-white" style="margin-top: -12px;">
        <div class="row g-0">
            <div class="col-lg-12">
                <div id="carouselExampleFade" class="carousel slide carousel-fade w-100" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($sliders as $slider)
                            <button type="button" class="{{ $loop->index == 0 ? 'active' : '' }}"
                                data-bs-target="#carouselExampleFade" data-bs-slide-to="{{ $loop->index }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($sliders as $slider)
                            <div class="carousel-item {{ ($loop->iteration == 1) ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $slider->img) }}" class="d-block w-100" alt="Slide 1">
                                <div class="carousel-caption text-start">
                                    <div class="handleCaption">
                                        <div style="width: 70%;">
                                            <h1 class="fw-bold slider_title">{{ $slider->title }}</h1>
                                            <p class="mt-1 slider-body">{{ $slider->description }} </p>
                                            <a href="{{ route('welocme.contactus') }}" class="join-us-button">Join With Us</a>
                                        </div>
                                    </div>
                                    <!-- <a href="#" class="btn btn-danger btn-lg px-4 mt-1">See More</a> -->
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <!-- <span class="carousel-control-prev-icon bg-dark p-3" aria-hidden="true"></span> -->
                        <span class="carousel_indecator">
                            < </span>
                                <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <!-- <span class="carousel-control-next-icon bg-dark p-3" aria-hidden="true"></span> -->
                        <span class="carousel_indecator">></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


        </div>
    </section>
    <section>
        <div class="container">
            {{-- include('frontend.home.livescore') --}}
            <div id="matchCards" class="score_carousel owl-carousel owl-theme mt-0 py-2"></div>
        </div>
    </section>
    <!-- Impact section Start -->
    @include('frontend.home.impact', ['data' => $impactData])
    <!-- Impact section End -->

    <!-- wellcome Node Section start hare -->
    <section class="welcome-section text-white">
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 px-3">
                    <div class="leftcontainer">
                        <div class="top">
                            <h1 class="f-900 welcome_font">Wellcome to {{ optional($wellcomeNode)->title }}</h1>
                        </div>
                        <p>{!! optional($wellcomeNode)->note !!}
                        </p>
                        <div class="text-end">
                            <a href="{{ route('welocme.aboutus') }}" class="btn mx-auto mt-2 w3-text-white bt-sm py-1"
                                style="background: #0f66dd;">
                                See More &gt;&gt;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0 px-5">
                    <img src="{{ optional($wellcomeNode)->image_2 ? asset('storage/' . $wellcomeNode->image_2) : asset('frontend/images/welcome/bg.jpg') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- Service Sectin -->
    <section class="servSection py">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 d-flex flex-row justify-content-center align-items-center mb-3 mb-md-0">
                    <div class="servcard">
                        <h2 class="border-container" style="margin-bottom:15px">Served Over</h2>
                        <h1>{{ $impactData->total_crickter }}</h1>
                        <h2>Cricketers</h2>
                    </div>
                </div>
                <div
                    class="col-md-8 col-12 d-flex flex-row justify-content-center align-items-center text-center mb-3 mb-md-0">
                    <div class="servcard bg-yellow">
                        <img style="width: 50px;" src="{{ optional($invite)->img ? asset('storage/'.$invite->img) : asset('frontend/images/home/crickter.png') }}" alt="">
                        <h3>{{ optional($invite)->title }}</h3>
                        <p class="f-12">{!!  optional($invite)->speech !!}</p>
                        <a href="{{ route('welocme.contactus') }}" class="btn-white">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feedbackSection bg-yellow py-5">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="card-">
                            <div class="card-header-">
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="main-hed01 crickter_voice">{{ $impactData->advertis_title }}</h2>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-0">
                                <div class="shop-slider owl-carousel owl-theme mt-0 py-2">
                                    @foreach ($feedbacks as $fedbck)
                                        <div class="player-card">
                                            <div class="card border-0 shadow-sm p-1 rounded-3 feedback-card">
                                                <div class="card-body p-0">
                                                    <img style="height:190px" class="img-fluid" src="{{ asset('storage/' . $fedbck->photo) }}" alt="{{ $fedbck->name }}">
                                                    <div>
                                                        <p class="card_title_style text-truncate" style="color: #000000;">{{ optional($fedbck)->name }}</p>
                                                        <p class=" card-body-style" style="color: #000000;">{{ optional($fedbck)->note }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <section class="authmessage bg-light py">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12 auth_message pr-2">
                    <h1 class="border-container f-30">{{ $auth_message->title }}</h1>
                    @php
                        $sps = substr(strip_tags($auth_message->speech), 0, 500);
                        $sps = strlen($sps) >= 500 ? $sps . "..." : $sps
                    @endphp
                    <p>{!! $sps !!}</p>
                    <div class="py-3 d-flex justify-content-end">
                        {{-- <p>{{ $auth_message->name }}</p>
                        <span class='f-12'>{{ $auth_message->designation }}</span> --}}
                        <a href="{{ route('tournament') }}" class="btn bg-yellow">Read More</a>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div>
                        <img src="{{ asset('storage/' . $auth_message->img) }}" class="img-fluid p-0" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('js')
    <script>
        const API_KEY = "cdce7f65-b9a1-44ff-8322-d36d346d9d59";
        const API_URL = "https://api.cricapi.com/v1/currentMatches?apikey=" + API_KEY;

        function loadScores() {
            $.get(API_URL, function (response) {
                if (response.status !== "success") return;

                let matches = response.data;
                if (!matches || matches.length === 0) return;

                const container = $('#matchCards'); // jQuery object
                container.trigger('destroy.owl.carousel'); // destroy previous instance
                container.html(matches.map(match => createCard(match)).join("")); // replace cards

                // reinitialize owlCarousel
                container.owlCarousel({
                    loop: true,
                    margin: 20,
                    autoplay: false,
                    rtl: false,
                    nav: true,
                    dots: false,
                    responsive: {
                        0: { items: 1, autoplay: true, nav: false, dots: true },
                        600: { items: 2 },
                        1000: { items: 3 },
                        1200: { items: 4 }
                    }
                });
            });
        }

        // loadScores()
        
        function createCard(match) {
            const team1 = match.teamInfo[0];
            const team2 = match.teamInfo[1];
            const score = match.score || [];
            const score1 = getScoreByTeam(team1.name, score);
            const score2 = getScoreByTeam(team2.name, score);
            return `
                <div class="item"> <!-- Owl Carousel item -->
                    <div class="card shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <p class="text-truncate f-11">${match.name}</p>
                        <span class="f-12 text-uppercase">${match.matchType}</span>
                        </div>

                        <div>
                        <div class="first-team d-flex justify-content-between align-items-center mt-2">
                            <div class="f-12 d-flex align-items-center">
                            <div class="card"><div class="card-body p-0">
                                <img class="liveCardImgSize" src="${team1.img}" alt="">
                            </div></div>
                            <span class="f-12 ps-2">${team1.shortname}</span>
                            </div>
                            <div class="f-12">${score1}</div>
                        </div>
                        <div class="second-team d-flex justify-content-between align-items-center mt-2">
                            <div class="d-flex align-items-center">
                            <div class="card"><div class="card-body p-0">
                                <img class="liveCardImgSize" src="${team2.img}" alt="">
                            </div></div>
                            <span class="f-12 ps-2">${team2.shortname}</span>
                            </div>
                            <div class="f-12">${score2}</div>
                        </div>
                        </div>
                        <div class="mt-2">
                        <p class="text-truncate f-11">${match.status}</p>
                        </div>
                    </div>
                    </div>
                </div>
                `;
        }

        function getScoreByTeam(teamName, scores) {
            const teamScores = scores.filter(s =>
                s.inning.toLowerCase().includes(teamName.toLowerCase())
            );
            if (teamScores.length === 0) return "-";
            if (teamScores.length === 1) {
                const s = teamScores[0];
                return `${s.r}-${s.w} (${s.o})`;
            }
            const firstInning = teamScores[0];
            const lastInning = teamScores[teamScores.length - 1];
            return `${firstInning.r} & ${lastInning.r}-${lastInning.w} (${lastInning.o})`;
        }

        // setInterval(loadScores, 60000);
        var shopSlider = $('.shop-slider');
        shopSlider.owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    gap:30
                },
                600: {
                    items: 3
                },
                667: {
                    items: 3
                },
                1000: {
                    items: 4
                },
                1400: {
                    items: 5
                }
            }
        });

        $('.score_carousel').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: false,
            rtl: false,
            nav: true,
            dots: false,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 },
                1200: { items: 4 }
            }
        });

    </script>
    <script>
        $(document).ready(function () {
            var myCarousel = document.querySelector('#carouselExampleFade')
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 5000000,
            })
        });

        
    </script>
@endpush