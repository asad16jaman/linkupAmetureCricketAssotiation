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
                <h1 class="text-center">Photo Gallery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item-"></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

  
    <div class="container">
        <div class="row g-4 mt-0 mb-3">
            <div class="col-lg-3 col-md-6">
                <a data-fancybox="wk" href="{{ asset('frontend/images/gla2.webp') }}" class="comon-links-divb05">
                    <figure>
                        <img src="{{ asset('frontend/images/gla2.webp') }}" alt="pbnm">
                        <figcaption>
                            FGC CUP 2022
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a data-fancybox="wk" href="{{ asset('frontend/images/gla3.webp') }}" class="comon-links-divb05">
                    <figure>
                        <img src="{{ asset('frontend/images/gla3.webp') }}" alt="pbnm">
                        <figcaption>
                            FGC CUP 2022
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a data-fancybox="wk" href="{{ asset('frontend/images/gla4.webp') }}" class="comon-links-divb05">
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
                <a data-fancybox="wk" href="{{ asset('frontend/images/gla2.webp') }}" class="comon-links-divb05">
                    <figure>
                        <img src="{{ asset('frontend/images/gla2.webp') }}" alt="pbnm">
                        <figcaption>
                            FGC CUP 2022
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a data-fancybox="wk" href="{{ asset('frontend/images/gla3.webp') }}" class="comon-links-divb05">
                    <figure>
                        <img src="{{ asset('frontend/images/gla3.webp') }}" alt="pbnm">
                        <figcaption>
                            FGC CUP 2022
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a data-fancybox="wk" href="{{ asset('frontend/images/gla4.webp') }}" class="comon-links-divb05">
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
    </div>
    
@endsection

@push('js')
@endpush
