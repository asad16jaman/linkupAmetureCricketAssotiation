@extends('frontend.layouts.app')

@push('css')
    <style>
        .player-card .card {
            border: 1px solid #C40E00 !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .player-card:hover .card {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Social Icons Overlay */
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
    </style>
@endpush

@section('title')
    {{ optional($company)->name }}  | All Blogs
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
                <h1 class="text-center">Team Members</h1>
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
        <div class="container">
            <div class="row g-4 mt-0 mb-3 py-3">
                @foreach ($players as $player)
                    <div class="col-lg-2 col-sm-4">
                        <div class="player-card">
                            <div class="card border">
                                <div class="position-relative">
                                    <img style="height:170px" src="{{ asset('storage/' . $player->photo) }}" class="card-img-top"
                                        alt="{{ $player->name }}">
                                    <ul class="social-icons list-unstyled d-flex justify-content-center">
                                        <li><a href="#" class="btn btn-social"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="btn btn-social"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body text-center">
                                    <a href="" data-discover="true">
                                        <h5 class="card-title mb-1">{{ $player->name }}</h5>
                                    </a>
                                    <p class="text-muted mb-0">{{ $player->designation }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection

@push('js')
@endpush