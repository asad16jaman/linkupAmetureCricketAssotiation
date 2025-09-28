@extends('frontend.layouts.app')

@push('css')
    <style>
        .blog-date-badge {
            position: absolute;
            top: 0px;
            right: 15px;
            font-size: 14px;
            font-weight: 600;
            padding: 10px 16px;
            /* border-radius: 6px; */
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
    </style>
@endpush

@section('title')
    Cricket Association | All Blogs
@endsection



@push('css')
@endpush

@section('content')
    <section class="banner-part sub-main-banner float-start w-100">
        <div class="baner-imghi">
            <img src="{{ asset('frontend/images/sub-banner01.jpg') }}" alt="sub-banner">
        </div>
        <div class="sub-banner">
            <div class="container">
                <h1 class="text-center">Vedio Gallery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item-"></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <div class="video-section d-inline-block w-100 w3-light-gray pt-3 pb-2">
        <div class="container">
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
                            <img alt="su" src="{{ asset('frontend/images/video5.webp') }}" class="img-fluid" />
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
                            <img alt="su" src="{{ asset('frontend/images/video5.webp') }}" class="img-fluid" />
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
                            <img alt="su" src="{{ asset('frontend/images/video5.webp') }}" class="img-fluid" />
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
                            <img alt="su" src="{{ asset('frontend/images/video5.webp') }}" class="img-fluid" />
                            <span class="btn">
                                <i class="fas fa-play"></i> 9:45
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
