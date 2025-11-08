@extends('frontend.layouts.app')

@push('css')
    <style>
        .player-card .card {
            border: 1px solid #323f35 !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
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
        .management_highliter {
            width: 100%;
            bottom: -61px;
            transition: 0.5s;
            background: #323f35;
            color: #fff;
        }
        .player-card:hover .management_highliter{
            bottom: 0px;
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
                    <div class="col-lg-3 col-12 col-md-6">
                        <div class="player-card position-relative">  
                            <div class="card border" style="height: 330px;">
                                <div class="position-relative management_card">
                                    <a data-fancybox="wk" href="{{ asset('storage/'.$player->photo) }}" class="comon-links-divb05" style="border-radius:0px">
                                    <img style="height:250px;" src="{{ asset('storage/' . $player->photo) }}" class="card-img-top"
                                        alt="{{ $player->name }}">
                                    
                                    </a>
                                </div>
                                <div class="card-body text-center position-absolute management_highliter">
                                    <a href="" data-discover="true">
                                        <h5 class="card-title mb-1">{{ $player->name }}</h5>
                                    </a>
                                    <p class=" mb-0">{{ $player->designation }}</p>
                                    <hr>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <p style="margin-right:10px"><i class="fas fa-envelope"></i></p>
                                        <p>{{ $player->email ?? "Email not available" }}</p>
                                    </div>
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