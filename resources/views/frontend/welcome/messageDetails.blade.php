@extends('frontend.layouts.app')

@section('title')
    {{ optional($company)->name }} | Chairman Message
@endsection

Amateur Cricket Association
@push('css')
<style>
     .aboutContent p{
            text-align: justify;
        }

        .leftImgDiv{
            width: 20%;height: auto;float: right;
            padding-left: 20px!important;
            padding: 10px 0px;
            margin-left: 30px;
            /* margin-bottom: 30px; */
        }
        .contentdiv{
                width: 100%;
                height: auto;
                overflow: hidden;
        }

        .contentdiv p{
            text-align: justify;
        }

        @media only screen and (max-width: 768px) {
            .leftImgDiv{
                width: 50%;
                margin-bottom: 10px;
            }
        }

        @media only screen and (max-width: 500px) {
            .leftImgDiv{
                width: 100%;
                margin-bottom: 10px;
            }
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
                <h1 class="text-center">
                    {{ optional($auth_message)->designation ? optional($auth_message)->designation : "Chairman" }} Message
                </h1>
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
            
            <div class="container my-2">
                <div class="wrapper">
                    <div class="content py-3">
                        <div class="row text-center">
                            <h3 class="w-100 text-center mb-2">{{ optional($auth_message)->designation }} Message</h3>
                        </div>
                        <div class="contentdiv">
                            <div class="leftImgDiv">
                                <img src="{{ asset('storage') . '/' . optional($auth_message)->img }}"
                                    style="width:100%;height:auto;object-fit:cover;" alt="Cosmetics">
                                <h4 style="margin-top:10px; text-align:center">{{ optional($auth_message)->name }}</h4>
                                <small class="text-center" style="display:block;text-align:center">{{ optional($auth_message)->designation }}</small>
                            </div>
                            <!-- <h1> optional($aboutdetail)->title  }}</h1> -->
                            <p class="aboutContent" style="text-align:justify!important">
                                {!! optional($auth_message)->speech  !!}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush