@extends('frontend.layouts.app')
@section('title')
    Cricket Association | Welcome
@endsection
@push('css')
    <style>
        .owl-player-custom-nav {
            display: flex;
            gap: 10px;
        }

        .owl-player-custom-nav .btn {
            background: #C40E00;
            color: #fff;
            border-radius: 10%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s ease;
        }

        .owl-player-custom-nav .btn:hover {
            background: #C40E00;
            transform: scale(1.1);
        }

        .owl-gallery-custom-nav {
            display: flex;
            gap: 10px;
        }

        .owl-gallery-custom-nav .btn {
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

        .owl-gallery-custom-nav .btn:hover {
            background: #C40E00;
            transform: scale(1.1);
        }



        .owl-video-custom-nav {
            display: flex;
            gap: 10px;
        }

        .owl-video-custom-nav .btn {
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

        .owl-video-custom-nav .btn:hover {
            background: #C40E00;
            transform: scale(1.1);
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




        .player-card .card {
            border: 1px solid #C40E00 !important;
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
            max-width: 90%; 
        }

        .banner-part-content h1 {
            font-size: 1.6rem;
            line-height: 1.3;
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
            max-height: 430px;
            object-fit: cover;
        }

    
        @media (max-width: 768px) {
            .banner-part-content h1 {
                font-size: 1.2rem;
            }

            .carousel-inner img {
                max-height: 280px;
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


        @media (min-width: 769px) and (max-width: 1200px) {
            .banner-part-content h1 {
                font-size: 1.4rem;
            }

            .carousel-inner img {
                max-height: 380px;
            }

            .carousel-caption {
                font-size: 1rem;
            }
        }


        @media (min-width: 1201px) and (max-width: 1440px) {
            .carousel-inner img {
                height: 555px;
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
    </style>
@endpush


@section('content')
    {{-- <section class="banner-part-content w-100 float-start w3-white">
        <div class="row g-0 align-items-stretch">
            <div class="col-md-9 d-flex">
                <div id="carouselExampleFade" class="carousel slide carousel-fade w-100" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                            class="active"></button>
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></button>
                    </div>
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active position-relative h-100">
                            <img src="{{ asset('frontend/images/he2.jpg') }}" class="d-block w-100 h-100 object-fit-cover"
                                alt="Slide 1">
                            <div class="carousel-caption text-start d-none d-md-block">
                                <h1 class="fw-bold">Post Match Shenanigans ft. Shubman Gill | India vs Bangladesh</h1>
                                <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <a href="#" class="btn btn-danger btn-lg px-4 mt-3">See More</a>
                            </div>
                        </div>
                        <div class="carousel-item position-relative h-100">
                            <img src="{{ asset('frontend/images/ban012.jpg') }}"
                                class="d-block w-100 h-100 object-fit-cover" alt="Slide 2">
                            <div class="carousel-caption text-start d-none d-md-block bg-opacity-50 p-3 rounded">
                                <h1 class="fw-bold">Post Match Shenanigans ft. Shubman Gill | India vs Bangladesh</h1>
                                <p class="mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <a href="#" class="btn btn-danger btn-lg px-4 mt-2">See More</a>
                            </div>
                        </div>
                    </div>


                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark p-3" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark p-3" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>




            <div class="col-md-3 d-flex">
                <div class="card shadow-sm w-100">
                    <div class="card-header bg-danger text-white fw-bold">
                        Message From Chairman
                    </div>
                    <div class="card-body">
                        <div class="d-flex g-2 align-items-center">
                            <div class="me-3">
                                <img src="{{ asset('/frontend/images/Lalon_Hossain.png') }}"
                                    class="img-fluid rounded border border-2" width="100" alt="Chairman">
                            </div>
                            <div class="" style="color: #000">
                                <h6 class="mb-0"><b>Lalon Hossain</b></h6>
                                <small>Chairman</small>
                                <h6 class="w3-tiny">
                                    Corporate Amateur Cricket Association
                                </h6>
                            </div>
                        </div>
                        <p class="mt-2 mb-1 limited-text"
                            style="font-size: 0.9rem; text-align: justify; line-height:1.5; color: #000">
                            Corporate Amateur Cricket Association (CACA) was established in the year 2011 by few cricket
                            loving individuals, who visualized this platform to be the stairway to a weekend getaway for
                            cricket crazy people who are truly affectionate towards the game. The first tournament was
                            played by Cadet College Club Limited (CCCL), Grameen Phone (GP), Brac Bank (BB), British
                            American Tobacco (BATB), Banglalink and Bangla Trac. The tournament continued with the same
                            spirit till date with many new corporate houses taking part.

                          

                        </p>



                    </div>
                    <div class="card-footer">
                        <a href="{{ route('welcome.messageDetails') }}"
                            class="text-decoration-none w3-medium text-danger fw-semibold float-end">
                            Read more &gt;&gt;
                        </a>
                    </div>
                </div>
            </div>





        </div>
    </section> --}}


    <section class="banner-part-content w-100 float-start w3-white">
        <div class="row g-0">
      
            <div class="col-md-9">
                <div id="carouselExampleFade" class="carousel slide carousel-fade w-100" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                            class="active"></button>
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></button>
                    </div>
                    <div class="carousel-inner">
                 
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/images/he2.jpg') }}" class="d-block w-100" alt="Slide 1">
                            <div class="carousel-caption text-start d-none d-md-block">
                                <h1 class="fw-bold">Post Match Shenanigans ft. Shubman Gill | India vs Bangladesh</h1>
                                <p class="mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <a href="#" class="btn btn-danger btn-lg px-4 mt-1">See More</a>
                            </div>
                        </div>
                     
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/images/ban012.jpg') }}" class="d-block w-100" alt="Slide 2">
                            <div class="carousel-caption text-start d-none d-md-block">
                                <h1 class="fw-bold">Post Match Shenanigans ft. Shubman Gill | India vs Bangladesh</h1>
                                <p class="mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <a href="#" class="btn btn-danger btn-lg px-4 mt-1">See More</a>
                            </div>
                        </div>
                    </div>

                   

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark p-3" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark p-3" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Card -->
            <div class="col-md-3 mt-2 mt-md-0">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-danger text-white fw-bold">
                        Message From Chairman
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3">
                                <img src="{{ asset('/frontend/images/Lalon_Hossain.png') }}"
                                    class="img-fluid rounded border border-2" width="80" alt="Chairman">
                            </div>
                            <div style="color: #000">
                                <h6 class="mb-0"><b>Lalon Hossain</b></h6>
                                <small>Chairman</small>
                                <h6 class="w3-tiny">Corporate Amateur Cricket Association</h6>
                            </div>
                        </div>
                        <p class="limited-text mb-2"
                            style="font-size: 0.9rem; text-align: justify; line-height:1.5; color: #000;">
                            Corporate Amateur Cricket Association (CACA) was established in the year 2011 by few cricket
                            loving individuals, who visualized this platform to be the stairway to a weekend getaway for
                            cricket crazy people who are truly affectionate towards the game. The first tournament was
                            played by Cadet College Club Limited (CCCL), Grameen Phone (GP), Brac Bank (BB), British
                            American Tobacco (BATB), Banglalink and Bangla Trac. The tournament continued with the same
                            spirit till date with many new corporate...
                        </p>
                    </div>
                    <div class="card-footer py-1">
                        <a href="{{ route('welcome.messageDetails') }}"
                            class="text-decoration-none w3-medium text-danger fw-semibold float-end">
                            Read more &gt;&gt;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="welcome-section w3-light-gray">
        <div class="container py-2">
            <div class="row pt-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="display-5 fw-bold mb-3">
                        <div class="heading sideheading">
                            <div class="sub">
                                <h6 class="" style="font-size: 20px;">Welcome to</h6>
                            </div>
                            <h2 class="font-weight-bold">Corporate Amateur Cricket Association</h2>
                            <hr class="styled-hr py-0 mb-2 mt-2">
                        </div>
                    </h1>
                    <p class="lead justify w3-medium" style="text-align: justify;">
                        Corporate Amateur Cricket Association (CACA) was established in the year 2011 by
                        few cricket loving individuals, who visualized this platform to be the stairway
                        to a weekend getaway for cricket crazy people who are truly affectionate towards the game.
                        The first tournament was played by Cadet College Club Limited (CCCL), Grameen Phone (GP),
                        Brac Bank (BB), British American Tobacco (BATB), Banglalink and Bangla Trac. The tournament
                        continued with the same spirit till date with many new corporate houses taking part.

                    </p>

                    <div class="text-end">
                        <a href="{{ route('welocme.note') }}" class="btn mx-auto mt-2 w3-text-white bt-sm py-1"
                            style="background: #C40E00;">
                            See More &gt;&gt;</a>
                    </div>

                </div>


                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card border p-2">
                        <div class="card-header">
                            <h4 class="text-center">Live Cricket Scores</h4>
                        </div>
                        <div class="card-body px-0">
                            <div id="cricket-scores">
                                <div id="score-list" class="list-group">
                                    <!-- Scores will load here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="float-start w-100 body-part pt-0">
        <div class="shop-apge-div py-0 my-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-">
                            <div class="card-header-">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="main-hed01" style="font-size: 28px;">Our Team Members</h2>
                                    <div class="owl-player-custom-nav">
                                        <button class="btn btn-asee prev"><i class="fas fa-angle-left"></i></button>
                                        <button class="btn btn-asee next"><i class="fas fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-0">

                                <div class="shop-slider owl-carousel owl-theme mt-0">
                                    <div class="player-card">
                                        <div class="card border">
                                            <div class="position-relative">
                                                <img src="{{ asset('frontend/images/teamp2.png') }}" class="card-img-top"
                                                    alt="Clive Radley">


                                                <ul class="social-icons list-unstyled d-flex justify-content-center">
                                                    <li><a href="#" class="btn btn-social"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" class="btn btn-social"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body text-center">
                                                <a href="/Players/Clive Radley" data-discover="true">
                                                    <h5 class="card-title mb-1">Clive Radley</h5>
                                                </a>
                                                <p class="text-muted mb-0">All-Rounder</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="player-card">
                                        <div class="card border">
                                            <div class="position-relative">
                                                <img src="{{ asset('frontend/images/5341758446922.jpg') }}"
                                                    class="card-img-top" alt="Clive Radley">
                                                <ul class="social-icons list-unstyled d-flex justify-content-center">
                                                    <li><a href="#" class="btn btn-social"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" class="btn btn-social"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body text-center">
                                                <a href="#" data-discover="true">
                                                    <h5 class="card-title mb-1">John Smith</h5>
                                                </a>
                                                <p class="text-muted mb-0">Batsman</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="player-card">
                                        <div class="card border">
                                            <div class="position-relative">
                                                <img src="{{ asset('frontend/images/3341758445407.jpg') }}"
                                                    class="card-img-top" alt="Clive Radley">
                                                <ul class="social-icons list-unstyled d-flex justify-content-center">
                                                    <li><a href="#" class="btn btn-social"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" class="btn btn-social"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body text-center">
                                                <a href="#" data-discover="true">
                                                    <h5 class="card-title mb-1">Michael Clarke</h5>
                                                </a>
                                                <p class="text-muted mb-0">Wicket Keeper</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="player-card">
                                        <div class="card border">
                                            <div class="position-relative">
                                                <img src="{{ asset('frontend/images/1541758446935.jpg') }}"
                                                    class="card-img-top" alt="Clive Radley">
                                                <ul class="social-icons list-unstyled d-flex justify-content-center">
                                                    <li><a href="#" class="btn btn-social"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" class="btn btn-social"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body text-center">
                                                <a href="/Players/Clive Radley" data-discover="true">
                                                    <h5 class="card-title mb-1">David Warner</h5>
                                                </a>
                                                <p class="text-muted mb-0">Bowler</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <a href="{{ route('welocme.teamMembers') }}"
                                        class="btn mx-auto mt-2 w3-text-white bt-sm py-1" style="background: #C40E00;">
                                        See More &gt;&gt;</a>
                                </div>


                            </div>
                        </div>



                    </div>

                    {{-- <div class="col-md-3">
                    <div class="card- border p-2">
                        <div class="card-header-">
                          <h4 class="text-center">Live Cricket Scores</h4>
                        </div>
                        <div class="card-body">
                            <div id="cricket-scores">
                            
                                <div id="score-list" class="list-group">
                                    <!-- Scores will be populated here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div> --}}
                </div>

            </div>
        </div>





        <div class="latest-blogs pt-3 pb-2 w3-light-gray">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h2 class="main-hed01" style="font-size: 28px;">Latest Blogs</h2>
                </div>

                <div class="row g-4">

                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm h-100 blog-card">
                                <div class="position-relative">
                                    <img src="{{ asset('frontend/images/fg.jpg') }}" class="card-img-top"
                                        alt="Blog">
                                    <div class="blog-date-badge bg-danger text-white text-center">
                                        Fri <br><span>15</span>Aug
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2 text-uppercase">Club</span>
                                    <h5 class="card-title fw-semibold w3-medium">T20 2023 Herbalife Active Catch of Week 8
                                    </h5>

                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm h-100 blog-card">
                                <div class="position-relative">
                                    <img src="{{ asset('frontend/images/sg.webp') }}" class="card-img-top"
                                        alt="Blog">
                                    <div class="blog-date-badge bg-danger text-white text-center">
                                        Fri <br><span>15</span>Aug
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2 text-uppercase">Sports</span>
                                    <h5 class="card-title fw-semibold w3-medium">India thump England for sixth successive
                                        win</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm h-100 blog-card">
                                <div class="position-relative">
                                    <img src="{{ asset('frontend/images/fg.jpg') }}" class="card-img-top"
                                        alt="Blog">
                                    <div class="blog-date-badge bg-danger text-white text-center">
                                        Fri <br><span>15</span>Aug
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2 text-uppercase">Team</span>
                                    <h5 class="card-title fw-semibold w3-medium">T20 2023 Herbalife Active Catch of Week 8
                                    </h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm h-100 blog-card">
                                <div class="position-relative">
                                    <img src="{{ asset('frontend/images/fg.jpg') }}" class="card-img-top"
                                        alt="Blog">
                                    <div class="blog-date-badge bg-danger text-white text-center">
                                        Fri <br><span>15</span>Aug
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2 text-uppercase">Club</span>
                                    <h5 class="card-title fw-semibold w3-medium">T20 2023 Herbalife Active Catch of Week 8
                                    </h5>

                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm h-100 blog-card">
                                <div class="position-relative">
                                    <img src="{{ asset('frontend/images/sg.webp') }}" class="card-img-top"
                                        alt="Blog">
                                    <div class="blog-date-badge bg-danger text-white text-center">
                                        Fri <br><span>15</span>Aug
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2 text-uppercase">Sports</span>
                                    <h5 class="card-title fw-semibold w3-medium">India thump England for sixth successive
                                        win</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm h-100 blog-card">
                                <div class="position-relative">
                                    <img src="{{ asset('frontend/images/fg.jpg') }}" class="card-img-top"
                                        alt="Blog">
                                    <div class="blog-date-badge bg-danger text-white text-center">
                                        Fri <br><span>15</span>Aug
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2 text-uppercase">Team</span>
                                    <h5 class="card-title fw-semibold w3-medium">T20 2023 Herbalife Active Catch of Week 8
                                    </h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm h-100 blog-card">
                                <div class="position-relative">
                                    <img src="{{ asset('frontend/images/sg.webp') }}" class="card-img-top"
                                        alt="Blog">
                                    <div class="blog-date-badge bg-danger text-white text-center">
                                        Fri <br><span>15</span>Aug
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2 text-uppercase">Sports</span>
                                    <h5 class="card-title fw-semibold w3-medium">India thump England for sixth successive
                                        win</h5>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm h-100 blog-card">
                                <div class="position-relative">
                                    <img src="{{ asset('frontend/images/fg.jpg') }}" class="card-img-top"
                                        alt="Blog">
                                    <div class="blog-date-badge bg-danger text-white text-center">
                                        Fri <br><span>15</span>Aug
                                    </div>
                                </div>
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2 text-uppercase">Team</span>
                                    <h5 class="card-title fw-semibold w3-medium">T20 2023 Herbalife Active Catch of Week 8
                                    </h5>

                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="text-end">
                    <a href="{{ route('welocme.blogs') }}" class="btn mx-auto mt-2 w3-text-white bt-sm py-1"
                        style="background: #C40E00;">
                        See More &gt;&gt;</a>
                </div>
            </div>
        </div>



        <div class="pt-3 pb-2">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between pb-2">
                    <h2 class="main-hed01" style="font-size: 28px;">Photo Gallery</h2>
                </div>

                {{-- 
                    <div class="row row-cols-1 row-cols-sm-2 gy-4">
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox="wk" href="{{ asset('frontend/images/gla2.webp') }}"
                            class="comon-links-divb05">
                            <figure>
                                <img src="{{ asset('frontend/images/gla2.webp') }}" alt="pbnm">
                                <figcaption>
                                    FGC CUP 2022
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox="wk" href="{{ asset('frontend/images/gla3.webp') }}"
                            class="comon-links-divb05">
                            <figure>
                                <img src="{{ asset('frontend/images/gla3.webp') }}" alt="pbnm">
                                <figcaption>
                                    FGC CUP 2022
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox="wk" href="{{ asset('frontend/images/gla4.webp') }}"
                            class="comon-links-divb05">
                            <figure>
                                <img src="{{ asset('frontend/images/gla4.webp') }}" alt="pbnm">
                                <figcaption>
                                    FGC CUP 2022
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox="wk" href="{{ asset('frontend/images/gla5.jpg') }}" class="comon-links-divb05">
                            <figure>
                                <img src="{{ asset('frontend/images/gla5.jpg') }}" alt="pbnm">
                                <figcaption>
                                    FGC CUP 2022
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox="wk" href="{{ asset('frontend/images/gla2.webp') }}"
                            class="comon-links-divb05">
                            <figure>
                                <img src="{{ asset('frontend/images/gla2.webp') }}" alt="pbnm">
                                <figcaption>
                                    FGC CUP 2022
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox="wk" href="{{ asset('frontend/images/gla3.webp') }}"
                            class="comon-links-divb05">
                            <figure>
                                <img src="{{ asset('frontend/images/gla3.webp') }}" alt="pbnm">
                                <figcaption>
                                    FGC CUP 2022
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox="wk" href="{{ asset('frontend/images/gla4.webp') }}"
                            class="comon-links-divb05">
                            <figure>
                                <img src="{{ asset('frontend/images/gla4.webp') }}" alt="pbnm">
                                <figcaption>
                                    FGC CUP 2022
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a data-fancybox="wk" href="{{ asset('frontend/images/gla5.jpg') }}" class="comon-links-divb05">
                            <figure>
                                <img src="{{ asset('frontend/images/gla5.jpg') }}" alt="pbnm">
                                <figcaption>
                                    FGC CUP 2022
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                --}}


                <div class="photo-gallery owl-carousel owl-theme">
  
                <div class="item p-0 m-0">
                    <a data-fancybox="wk" href="{{asset('frontend/images/gla2.webp')}}" class="comon-links-divb05">
                    <figure>
                        <img src="{{asset('frontend/images/gla2.webp')}}"  alt="pbnm"/>
                        <figcaption>FGC CUP 2022</figcaption>
                    </figure>
                    </a>
                </div>

                <div class="item p-0 m-0">
                    <a data-fancybox="wk" href="{{asset('frontend/images/gla3.webp')}}" class="comon-links-divb05">
                    <figure class="">
                        <img src="{{asset('frontend/images/gla3.webp')}}"  alt="pbnm"/>
                        <figcaption>FGC CUP 2022</figcaption>
                    </figure>
                    </a>
                </div>

                <div class="item p-0 m-0">
                    <a data-fancybox="wk" href="{{asset('frontend/images/gla4.webp')}}" class="comon-links-divb05">
                    <figure>
                        <img src="{{asset('frontend/images/gla4.webp')}}" alt="pbnm"/>
                        <figcaption>FGC CUP 2022</figcaption>
                    </figure>
                    </a>
                </div>

                <div class="item p-0 m-0">
                    <a data-fancybox="wk" href="{{asset('frontend/images/gla4.webp')}}" class="comon-links-divb05">
                    <figure>
                        <img src="{{asset('frontend/images/gla4.webp')}}"  alt="pbnm"/>
                        <figcaption>FGC CUP 2022</figcaption>
                    </figure>
                    </a>
                </div>

                </div> 

                <div class="text-end">
                    <a href="{{ route('welocme.photoGalleries') }}" class="btn mx-auto mt-2 w3-text-white bt-sm py-1"
                        style="background: #C40E00;">
                        See More &gt;&gt;</a>
                </div>


            </div>
        </div>

        <div class="video-section d-inline-block w-100 w3-light-gray">
          <div class="container">
                
                 <div class="d-flex align-items-center justify-content-between pb-3">
                    <h2 class="main-hed01" style="font-size: 36px;">Video Gallery</h2>
                    <div class="owl-video-custom-nav">
                        <button class="btn btn-asee prev"><i class="fas fa-angle-left"></i></button>
                        <button class="btn btn-asee next"><i class="fas fa-angle-right"></i></button>
                    </div>
                </div>

                <div class="coverages-slider  owl-carousel owl-theme mt-4">
                    

                    <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal" data-bs-target="#myModal"  class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
                      <div class="vio-imghj">
                        <img alt="su" src="{{asset('frontend/images/video2.jpg')}}"/>
                        <span class="btn"> <i class="fas fa-play"></i> 9:45 </span>
                      </div>
                     
                    </a>


                    <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal" data-bs-target="#myModal"  class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
                      <div class="vio-imghj">
                        <img alt="su" src="{{asset('frontend/images/video5.webp')}}"/>
                        <span class="btn"> <i class="fas fa-play"></i> 9:45 </span>
                      </div>
                  
                    </a>

                    

                </div>

               
                <div class="text-end">
                  <a href="#" class="btn btn-asee mt-3 mx-auto w3-text-white " style="background: #C40E00;"> More Videos </a>
                </div>

          </div>
      </div> 

       {{-- 
       
             <div class="video-section d-inline-block w-100 w3-light-gray pt-3 pb-2">
            <div class="container">

                <div class="d-flex align-items-center justify-content-between pb-2">
                    <h2 class="main-hed01" style="font-size: 28px;">Video Gallery</h2>
                </div>


                <div class="row g-4">

                    <div class="col-lg-3 col-md-6">
                        <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal"
                            data-bs-target="#myModal"
                            class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
                            <div class="vio-imghj">
                                <img alt="su" src="{{ asset('frontend/images/video2.jpg') }}" class="img-fluid" />
                                <span class="btn">
                                    <i class="fas fa-play"></i> 9:45
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal"
                            data-bs-target="#myModal"
                            class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
                            <div class="vio-imghj">
                                <img alt="su" src="{{ asset('frontend/images/video5.webp') }}"
                                    class="img-fluid" />
                                <span class="btn">
                                    <i class="fas fa-play"></i> 9:45
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal"
                            data-bs-target="#myModal"
                            class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
                            <div class="vio-imghj">
                                <img alt="su" src="{{ asset('frontend/images/video2.jpg') }}" class="img-fluid" />
                                <span class="btn">
                                    <i class="fas fa-play"></i> 9:45
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal"
                            data-bs-target="#myModal"
                            class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
                            <div class="vio-imghj">
                                <img alt="su" src="{{ asset('frontend/images/video5.webp') }}"
                                    class="img-fluid" />
                                <span class="btn">
                                    <i class="fas fa-play"></i> 9:45
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal"
                            data-bs-target="#myModal"
                            class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
                            <div class="vio-imghj">
                                <img alt="su" src="{{ asset('frontend/images/video2.jpg') }}" class="img-fluid" />
                                <span class="btn">
                                    <i class="fas fa-play"></i> 9:45
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal"
                            data-bs-target="#myModal"
                            class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
                            <div class="vio-imghj">
                                <img alt="su" src="{{ asset('frontend/images/video5.webp') }}"
                                    class="img-fluid" />
                                <span class="btn">
                                    <i class="fas fa-play"></i> 9:45
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal"
                            data-bs-target="#myModal"
                            class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
                            <div class="vio-imghj">
                                <img alt="su" src="{{ asset('frontend/images/video2.jpg') }}" class="img-fluid" />
                                <span class="btn">
                                    <i class="fas fa-play"></i> 9:45
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a data-url="https://www.youtube.com/embed/XJj2PbenIsU?rel=0&autoplay=1" data-bs-toggle="modal"
                            data-bs-target="#myModal"
                            class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
                            <div class="vio-imghj">
                                <img alt="su" src="{{ asset('frontend/images/video5.webp') }}"
                                    class="img-fluid" />
                                <span class="btn">
                                    <i class="fas fa-play"></i> 9:45
                                </span>
                            </div>
                        </a>
                    </div>



                </div>
                

                <!-- More Videos Button -->
                <div class="text-end">
                    <a href="{{ route('welocme.videoGalleries') }}" class="btn mx-auto mt-0 w3-text-white bt-sm py-1"
                        style="background: #C40E00;">
                        See More &gt;&gt;</a>
                </div>
            </div>
        </div>
       --}}



        <div class="modal fade youtube-video" id="myModal">
            <div class="modal-dialog modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="video-container" class="video-container">
                            <iframe id="youtubevideo" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
















        <div class="sponcer-logo d-inline-block w-100 py-0 my-0">
            <div class="container py-0 my-0">
                <div class="sponj-slide owl-carousel owl-theme">
                    <div class="corm-iteml py-0 border my-2 patner-card">
                        <figure class="m-auto">
                            <img src="{{ asset('frontend/images/p4.png') }}" alt="jok" />
                        </figure>
                    </div>
                    <div class="corm-iteml py-0 border my-2 patner-card">
                        <figure class="m-auto">

                            <img src="{{ asset('frontend/images/p5.png') }}" alt="jok" />
                        </figure>
                    </div>

                    <div class="corm-iteml py-0 border my-2 patner-card">
                        <figure class="m-auto">

                            <img src="{{ asset('frontend/images/p2.png') }}" alt="jok" />
                        </figure>
                    </div>

                    <div class="corm-iteml py-0 border my-2 patner-card">
                        <figure class="m-auto">

                            <img src="{{ asset('frontend/images/p1.png') }}" alt="jok" />
                        </figure>
                    </div>

                </div>


            </div>

        </div>

    </section>
@endsection

@push('js')
    {{-- <script>
        cricket live score----------------
        function fetchFromOffset(offset, cb) {
          $.post('https://api.cricapi.com/v1/countries?apikey=cdce7f65-b9a1-44ff-8322-d36d346d9d59&offset=' + offset, function(data) {
              if(data.status!="success") { alert("Failed"); return; }
              let datarray = data.data;
              if(!datarray) 
                  cb([]);
              else if(offset >= data.info.totalRows) 
                  cb(datarray);
              else 
                  fetchFromOffset(offset + 25, function(data) {
                      cb(datarray.concat(data));
                  });
          });
        }
        fetchFromOffset(0, function(data) {
          console.log("Complete data got!",data);
        });

        cricket live score----------------
    </script> --}}

    <script>
        const API_KEY = "cdce7f65-b9a1-44ff-8322-d36d346d9d59";
        const API_URL = "https://api.cricapi.com/v1/currentMatches?apikey=" + API_KEY;

        function loadScores() {
            $.get(API_URL, function(response) {
                if (response.status !== "success") {
                    $("#score-list").html("<div class='p-2 text-danger'>Failed to fetch scores</div>");
                    return;
                }

                let matches = response.data;
                if (!matches || matches.length === 0) {
                    $("#score-list").html("<div class='p-2 text-muted'>No live matches right now</div>");
                    return;
                }

                $("#score-list").empty();
                matches.forEach(match => {
                    let matchInfo = `
                    <div class="list-group-item">
                        <strong>${match.name}</strong><br>
                        ${match.status}<br>
                        <span class="text-primary">${match.teams[0]} vs ${match.teams[1]}</span><br>
                        <small>${match.venue}</small>
                    </div>
                `;
                    $("#score-list").append(matchInfo);
                });
            });
        }
        loadScores();
        setInterval(loadScores, 60000);
    </script>
@endpush
