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
                <h1 class="text-center">Blogs</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item-"></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="float-start w-100 body-part pt-0">

        <div class="latest-blogs py-3 w3-light-gray">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="card border-0 shadow-sm h-100 blog-card">
                                <div class="position-relative">
                                    <img src="{{ asset('frontend/images/fg.jpg') }}" class="card-img-top" alt="Blog">
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
                                    <img src="{{ asset('frontend/images/fg.jpg') }}" class="card-img-top" alt="Blog">
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
                                    <img src="{{ asset('frontend/images/fg.jpg') }}" class="card-img-top" alt="Blog">
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
            </div>
        </div>

    </section>
@endsection

@push('js')
@endpush
