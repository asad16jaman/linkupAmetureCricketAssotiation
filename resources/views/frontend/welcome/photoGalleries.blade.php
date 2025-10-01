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
    {{ optional($company)->name }} | All Blogs
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
        <div class="row g-4 mt-0 mb-3 py-3">

        @foreach ($photogallery as $gallery)
            <div class="col-lg-3 col-md-6">
                <a data-fancybox="wk" href="{{ asset('storage/'.$gallery->img) }}" class="comon-links-divb05">
                    <figure>
                        <img src="{{ asset('storage/'.$gallery->img) }}" alt="pbnm">
                        <figcaption>
                            {{ $gallery->title }}
                        </figcaption>
                    </figure>
                </a>
            </div>
        
        @endforeach
            
        </div>
    </div>
    
@endsection

@push('js')
@endpush
