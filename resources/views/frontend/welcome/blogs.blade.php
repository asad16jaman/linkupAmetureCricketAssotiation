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
     | All Blogs
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
                <div class="row g-4 py-3">
                    @forelse ($blogs as $blog)
                        <div class="col-lg-3 col-md-6">
                            <a href="{{ route('welocme.blogs.detial',['uid'=>$blog->uid]) }}" class="text-decoration-none text-dark">
                                <div class="card border-0 shadow-sm h-100 blog-card">
                                    <div class="position-relative">
                                        <img height="170px" src="{{ asset('storage/'.$blog->picture) }}" class="card-img-top" alt="{{ $blog->name }}">
                                        <div class="blog-date-badge bg-danger text-white text-center">
                                            @php
                                                    $date = \Carbon\Carbon::parse($blog->event_date);
                                                    $dayName = $date->format('D'); 
                                                    $dayNum  = $date->format('d');
                                                    $month   = $date->format('M');
                                                @endphp
                                                {{ $dayName }} <br><span>{{ $dayNum }}</span>{{ $month }}
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <span class="badge bg-danger mb-2 text-uppercase">{{ $blog->eventType->name }}</span>
                                        <h5 class="card-title fw-semibold w3-medium">{{ $blog->name }}
                                        </h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                    <p>There Is No Blogs</p>
                    @endforelse



                </div>
            </div>
        </div>

    </section>
@endsection

@push('js')
@endpush