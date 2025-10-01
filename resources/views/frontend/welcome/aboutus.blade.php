@extends('frontend.layouts.app')

@section('title')
    {{ optional($company)->name }} | About
@endsection

@push('css')
<style>
    .about-top-image{
        width: 50%;
        height: auto;
        float: right;
        padding: 10px 20px;
        /* background-color: red */
    }
    .about-top-image img{
        width: 100%;
        height: auto;
        object-fit: contain;
    }
</style>
@endpush

@section('content')
    <section class="banner-part sub-main-banner float-start w-100">
        <div class="baner-imghi">
            <img src="{{ asset('frontend/images/sub-banner01.jpg') }}" alt="sub-banner">
        </div>
        <div class="sub-banner">
            <div class="container">
                <h1 class="text-center"> About</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item-"></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <div class="about-page-main comon-sub-page-main d-inline-block w-100">
        <div class="about-club-top mt-1 mb-2">
            <div class="container pb-1 pt-0">
                <div class="row row-cols-1 row-cols-lg-2 g-lg-5">
                    

                    <div class="col-12 py-3" style="text-align: justify;">
                        {{-- <h5 class="samll-sub mb-1 mt-0"> Our Story </h5> --}}
                        <h2 class="comon-heading m-0 text-center mb-3"> {{ optional($about)->title }} </h2>
                        <div class="about-top-image">
                            <img src="{{ asset('storage/'.optional($about)->picture) }}" alt="pic">
                        </div>
                        
                        <p class="mt-2" style="text-align: justify;">
                           {!! optional($about)->about !!}
                        </p>

                        {{-- <p>
                            The motto of the tournament will continue to run as a platform for the people who gave up
                            playing professional cricket in order to serve as professionals in the corporate world; however
                            has enough passion to carry the sport along with themselves beside their respective careers.
                        </p> --}}

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
@endpush
