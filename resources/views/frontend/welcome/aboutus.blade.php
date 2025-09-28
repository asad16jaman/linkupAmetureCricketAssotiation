@extends('frontend.layouts.app')

@section('title')
    Cricket Association | About
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
        <div class="about-club-top mt-3">
            <div class="container pb-1 pt-0">
                <div class="row row-cols-1 row-cols-lg-2 g-lg-5">
                    <div class="col position-relative">
                        <figure class="big-img">
                            <img src="{{ asset('frontend/images/GettyImages-1764843770.webp') }}" alt="pic">
                        </figure>

                    </div>
                    <div class="col">
                        {{-- <h5 class="samll-sub mb-1 mt-0"> Our Story </h5> --}}
                        <h2 class="comon-heading m-0"> About </h2>
                        <p class="mt-2" style="text-align: justify;">
                            Corporate Amateur Cricket Association (CACA) was established in the year 2011 by few cricket
                            loving individuals, who visualized this platform to be the stairway to a weekend getaway for
                            cricket crazy people who are truly affectionate towards the game. The first tournament was
                            played by Cadet College Club Limited (CCCL), Grameen Phone (GP), Brac Bank (BB), British
                            American Tobacco (BATB), Banglalink and Bangla Trac. The tournament continued with the same
                            spirit till date with many new corporate houses taking part.
                            Corporate Amateur Cricket Association (CACA) was established in the year 2011 by few cricket
                            loving individuals, who visualized this platform to be the stairway to a weekend getaway for
                            cricket crazy people who are truly affectionate towards the game. The first tournament was
                            played by Cadet College Club Limited (CCCL), Grameen Phone (GP), Brac Bank (BB), British
                            American Tobacco (BATB), Banglalink and Bangla Trac. The tournament continued with the same
                            spirit till date with many new corporate houses taking part.
                            Corporate Amateur Cricket Association (CACA) was established in the year 2011 by few cricket
                            loving individuals, who visualized this platform to be the stairway to a weekend getaway for
                            cricket crazy people who are truly affectionate towards the game. The first tournament was
                            played by Cadet College Club Limited (CCCL), Grameen Phone (GP), Brac Bank (BB), British
                            American Tobacco (BATB), Banglalink and Bangla Trac. The tournament continued with the same
                            spirit till date with many new corporate houses taking part.
                            Corporate Amateur Cricket Association (CACA) was established in the year 2011 by few cricket
                            loving individuals, who visualized this platform to be the stairway to a weekend getaway for
                            cricket crazy people who are truly affectionate towards the game. The first tournament was
                            played by Cadet College Club Limited (CCCL), Grameen Phone (GP), Brac Bank (BB), British
                            American Tobacco (BATB), Banglalink and Bangla Trac. The tournament continued with the same
                            spirit till date with many new corporate houses taking part.
                            Corporate Amateur Cricket Association (CACA) was established in the year 2011 by few cricket
                            loving individuals, who visualized this platform to be the stairway to a weekend getaway for
                            cricket crazy people who are truly affectionate towards the game. The first tournament was
                            played by Cadet College Club Limited (CCCL), Grameen Phone (GP), Brac Bank (BB), British
                            American Tobacco (BATB), Banglalink and Bangla Trac. The tournament continued with the same
                            spirit till date with many new corporate houses taking part.
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
