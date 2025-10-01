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
            <div class="row g-4 py-3">
                @foreach ($videogallery as $gallery)
                    <div class="col-lg-3 col-md-6">
                        <a data-url="{{ $gallery->video_url }}" data-bs-toggle="modal"
                            data-bs-target="#myModal"
                            class="play-button comon-vedo-divu d-inline-block w-100 position-relative">
                            <div class="vio-imghj">
                                <img alt="su" src="{{ asset('storage/'.$gallery->img) }}" class="img-fluid" />
                                <span class="btn">
                                    <i class="fas fa-play"></i> {{ $gallery->duration }}
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- video modal start hare                      -->
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
        <!-- video modal end hare -->
        </div>
    </div>
@endsection

@push('js')
@endpush
