@extends('frontend.layouts.app')

@section('title')
    Cricket Association | Chairman Message
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
                <h1 class="text-center"> {{ optional($auth_message)->designation ? optional($auth_message)->designation : "Chairman" }} Message</h1>
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
        <div class="about-club-top mt-3">
            <div class="container pb-1 pt-0">
                <div class="row row-cols-1 row-cols-lg-2 g-lg-5 py-5">
                    <div class="col" >
                        <figure class="big-img">
                            <img style="object-fit: contain;!important" src="{{ asset('storage/'.$auth_message->img) }}" alt="pic">
                        </figure>
                    </div>
                    <div class="col">
                        <h5 class="mb-1 mt-0">{{ optional($auth_message)->name }} </h5>
                        <small class="comon-heading- m-0"> {{ optional($auth_message)->designation }} </small>
                        <p>{!! optional($auth_message)->speech !!}</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
@endpush
