@extends('frontend.layouts.app')
@section('title')
    {{ optional($company)->name }} | Welcome
@endsection
@push('css')
    <style>
         .owl-prev:after,
        .owl-next:after {
            content: "";
            font-family: "FontAwesome";
            position: absolute;
            font-size: 17px;
            color: #fff !important;
            padding: 13px 19px;
            background: #2bb679;
            border-radius: 50%;
        }

        .owl-nav {
            display: flex;
            position: absolute;
            width: 100%;
            top: 36%;
        }

        .owl-player-custom-nav {
            display: flex;
            gap: 10px;
        }

        .owl-player-custom-nav .btn {
                background: #ffffff;
                color: #fff;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: 0.3s ease;
        }

        .owl-player-custom-nav .btn:hover {
            background: #ffffff;
            transform: scale(1.1);
        }

        .owl-gallery-custom-nav {
            display: flex;
            gap: 10px;
        }

        .owl-video-custom-nav {
            display: flex;
            gap: 10px;
        }
        .owl-patner-custom-nav {
            display: flex;
            gap: 10px;
        }

        .owl-patner-custom-nav .btn {
            background: #C40E00;
            color: #fff;
            border-radius: 10%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s ease;
        }

        .owl-patner-custom-nav .btn:hover {
            background: #C40E00;
            transform: scale(1.1);
        }

        .owl-stage-outer {
            padding: 10px 0px;
        }

        .player-card .card {
            /* border: 1px solid #C40E00 !important; */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .player-card:hover .card {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .social-icons {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: 0.4s ease;
            gap: 10px;
        }

        .player-card:hover .social-icons {
            opacity: 1;

        }

        .btn-social {
            background: #C40E00;
            color: #fff;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s ease;
        }

        .join-us-button {
            font-size: 18px;
            background: #bd9b0c;
            display: inline-block;
            padding: 7px 12px;
            border-radius: 11px;
            margin-top: 41px;
        }

        .btn-social:hover {
            background: #900b00;
            transform: scale(1.1);
        }

        .welcome-section h1 h6 {
            color: #C40E00;
            font-size: 24px;
            font-weight: bold;
        }

        .welcome-section .btn-danger {
            background: #C40E00;
            border: none;
            transition: 0.3s ease;
        }

        .welcome-section .btn-danger:hover {
            background: #900b00;
            transform: translateY(-2px);
        }

        .image-box img {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .image-box:hover img {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
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

        .banner-part-content .btn-danger {
            background: #C40E00;
            border: none;
            transition: 0.3s ease;
        }

        .banner-part-content .btn-danger:hover {
            background: #900b00;
            transform: translateY(-2px);
        }

        .carousel-inner img {
            width: 100%;
            height: auto;
            /* max-height: 430px; */
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
            /* background-color: red; */
            border: 3px solid #ffdc0c;
            border-radius: 66%;
            left: -99px;
            bottom: -113px;
        }
        .liveCardImgSize{
            width: 41px;
            height: 25px;
            object-fit: contain;
        }

        @media (max-width: 768px) {
            .banner-part-content h1 {
                font-size: 1.2rem;
            }

            /* .carousel-inner img {
                                                                                max-height: 280px;
                                                                            } */

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

        @media (min-width: 769px) and (max-width: 1200px) {
            .banner-part-content h1 {
                font-size: 1.4rem;
            }

            /* .carousel-inner img {
                        max-height: 380px;
                    } */
            .carousel-caption {
                font-size: 1rem;
            }
        }

        @media (min-width: 1201px) and (max-width: 1440px) {

            .carousel-inner img {
                height: 542px;
            }


        }


        .styled-hr {
            border: none;
            height: 6px;
            background: linear-gradient(to right, #ff4b2b, #ff416c, #1e90ff);
            border-radius: 4px;
            margin: 20px 0;
            width: 120px;
        }


        #cricket-scores {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
        }

        #score-list {
            max-height: 300px;
            overflow-y: auto;
        }

        #score-list .list-group-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }

        #score-list .list-group-item strong {
            color: #C40E00;
        }


        .blog-date-badge {
            position: absolute;
            top: 0px;
            right: 15px;
            font-size: 14px;
            font-weight: 600;
            padding: 10px 16px;
            line-height: 1.2;
        }

        .blog-date-badge span {
            font-size: 18px;
            font-weight: bold;
            display: block;
        }

        .blog-card {
            transition: all 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .patner-card {
            border: 1px solid #C40E00 !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
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
            background-color: #fecd05;
        }

        .bg-light-aqua {
            background-color: #daf5f5;
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

        .btn-white {
            background: #ffffff;
        }

        .servcard a {
            padding: 8px 22px;
            border-radius: 19px;
            font-weight: 600;
        }

        .formerCoach {
            background: #1e2938;
            color: #ffffff;
        }

        .separate_indecator {
            display: inline-block;
            width: 50px;
            height: 3px;
            background: black;
            margin-bottom: 10px;
            background-color: #ffffff;
        }

        .speech {
            margin-bottom: 50px;
            font-size: 48px;
            text-align: left;
            font-weight: 700;
            margin-bottom: 50px
        }

        .feedback-card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            min-height: 250px;
        }

        .feedback-note {
            font-size: 15px;
            color: #444;
            line-height: 1.6;
            font-style: italic;
        }

        .feedback-img {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
        }
        .feedbackImage{
            width: 59px !important;
            height: 60px;
            object-fit: cover;
            border: 2px solid #c2c5bc;
            border-radius: 50%;
            padding: 2px;
            object-fit: fill;
        }
        .feedbackSection{
            padding: 30px;
            
        }
        .f-12{
            font-size: 13px;
        }
        .f-11{
            font-size: 11px;
        }
        .pl-13{
                margin-left: 13px;
        }
        .mt-8{
            margin-top: 8px;
        }
        .test{
            background: red;
            padding: 2px 6px;
            border-radius: 13px;
            color: #ffffff;
            font-weight: 600;
        }
        .t20{
            background: #3a3737;
            padding: 2px 6px;
            border-radius: 13px;
            color: #ffffff;
            font-weight: 600;
        }
        .odi{
             background: #096b2c;
            padding: 2px 6px;
            border-radius: 13px;
            color: #ffffff;
            font-weight: 600;
        }
        #matchCards{
            position: relative;
        }
        .py{
        padding: 70px 0px;
    }

    @media screen and (max-width:767px){
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
            .card {
             margin-top: 0px; 
        }
        .carousel_indecator {
            background-color: #bd9b0cc2;
            font-size: 15px;
            width: 20px;
            height: 20px;
    
        }
        .speech {
            margin-bottom: 50px;
            font-size: 29px;
            text-align: left;
            font-weight: 700;
            margin-bottom: 50px;
            margin-top: 31px;
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
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                            class="active"></button>
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($sliders as $slider)
                            <div class="carousel-item {{ ($loop->iteration == 1) ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $slider->img) }}" class="d-block w-100" alt="Slide 1">
                                <div class="carousel-caption text-start d-none d-md-block">
                                    <div class="handleCaption">
                                        <div style="width: 70%;">
                                            <h1 class="fw-bold">{{ $slider->title }}</h1>
                                            <p class="mt-1">{{ $slider->description }} </p>
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
           {{--  include('frontend.home.livescore') --}}
            <div id="matchCards" class="score_carousel owl-carousel owl-theme mt-0 py-2"></div>
        </div>
    </section>
    <!-- Impact section Start -->
    @include('frontend.home.impact', ['data' => $homedata])
    <!-- Impact section End -->

    <!-- wellcome Node Section start hare -->
    <section class="welcome-section text-white">
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 px-3">
                    <div class="leftcontainer">
                        <div class="top">
                            <h1 class="f-900">Wellcome to {{ optional($wellcomeNode)->title }}</h1>
                        </div>
                        <p>{!! optional($wellcomeNode)->note !!}
                        </p>
                        <div class="text-end">
                            <a href="{{ route('welocme.aboutus') }}" class="btn mx-auto mt-2 w3-text-white bt-sm py-1"
                                style="background: #2bb679;">
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
    <!-- wellcome Node Section end hare -->
    <section class="servSection py">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 d-flex flex-row justify-content-center align-items-center mb-3 mb-md-0">
                    <div class="servcard">
                        <h2 class="border-container" style="margin-bottom:15px">Served Over</h2>
                        <h1>{{ $homedata->total_crickter }}</h1>
                        <h2>Cricketers</h2>
                    </div>
                </div>
                <div
                    class="col-md-4 col-12 d-flex flex-row justify-content-center align-items-center text-center mb-3 mb-md-0">
                    <div class="servcard bg-yellow">
                        <img style="width: 50px;" src="{{ asset('frontend/images/home/crickter.png') }}" alt="">
                        <h3>Become a Cricketer</h3>
                        <p>Improve your game with world-class coaching and real match practice. Our training helps you
                            master batting, bowling, and fielding to shine on every stage.</p>
                        <a href="{{ route('welocme.contactus') }}" class="btn-white">Join With Us</a>
                    </div>
                </div>
                <div
                    class="col-md-4 col-12 d-flex flex-row justify-content-center align-items-center text-center mb-3 mb-md-0">
                    <div class="text-center">
                        <div class="servcard bg-light-aqua">
                            <img style="width: 50px;" src="{{ asset('frontend/images/home/umpire.png') }}" alt="">
                            <h3>Become a Umpire</h3>
                            <p>Learn the laws of cricket and gain confidence to make the right calls every time. Get trained
                                by experienced professionals and become a trusted face in every competitive match.</p>
                            <a href="{{ route('welocme.contactus') }}" class="bg-yellow">Join With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="authmessage bg-light py">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <h1 class="border-container">{{ $auth_message->title }}</h1>
                    <p>{!! $auth_message->speech !!}</p>
                    <div class="py-3">
                        <p>{{ $auth_message->name }}</p>
                        <span>{{ $auth_message->designation }}</span>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div>
                        <img src="{{ asset('storage/' . $auth_message->img) }}" class="img-fluid p-5" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="formerCoach py">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <img src="{{ asset('frontend/images/home/coach.jpg') }}" alt="">
                </div>
                <div class="col-md-6 col-12">
                    <h1 class="speech"> "Great playears are made in great academies <span class="separate_indecator"></span>
                        it all starts with the right guidance"
                    </h1>
                    <div class="d-flex justify-content-start  align-items-center">
                        <div style="background: #d6d605;padding: 18px;border-radius: 5px;display:inline-block"><i
                                class="fas fa-quote-left"></i>
                        </div>
                        <div class="ps-3">
                            Ricky Martin<br>
                            <small>Former Coach</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="feedbackSection bg-yellow">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="card-">
                            <div class="card-header-">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="main-hed01" style="font-size: 28px;">Voice From Our Cricketers</h2>
                                    <div class="owl-player-custom-nav">
                                        <button class="btn btn-asee prev"><i class="fas fa-angle-left text-dark"></i></button>
                                        <button class="btn btn-asee next"><i class="fas fa-angle-right text-dark"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-0">
                                <div class="shop-slider owl-carousel owl-theme mt-0 py-2">
                                    @foreach ($feedbacks as $fedbck)
                                        <div class="player-card">
                                            <div class="card border-0 shadow-sm p-4 rounded-3 feedback-card">
                                                <p class="feedback-note mb-4">
                                                    “{{ $fedbck->note }}”
                                                </p>
                                                <div class="d-flex align-items-center">
                                                    <img class="feedbackImage" src="{{ asset('storage/' . $fedbck->photo) }}" alt="{{ $fedbck->name }}"
                                                        class="feedback-img me-3">
                                                    <div class="text-start ps-3">
                                                        <h6 class="mb-0 fw-bold">{{ optional($fedbck)->name }}</h6>
                                                        <small class="text-muted">{{ optional($fedbck)->profession }}</small>
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
                0: { items: 1,autoplay:true,nav:false,dots:true },
                600: { items: 2 },
                1000: { items: 3 },
                1200: { items: 4 }
            }
        });
    });
}
loadScores();
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
            autoplay: false,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                667: {
                    items: 2
                },
                1000: {
                    items: 2
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
            var carousel = new bootstrap.Carousel(carouselExampleFade, {
                interval: 5000000,
            })
        });
    </script>
@endpush