@extends('frontend.layouts.app')

@section('title')
   {{ optional($company)->name }} | Blog Detail
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
                <h1 class="text-center"> Blogs Detail</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item-"></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- <div class="about-page-main comon-sub-page-main d-inline-block w-100">
        <div class="about-club-top mt-3">
            <div class="container pb-1 pt-0">
                <div class="row justify-content-center py-1">
                    <div class="col">
                        {{-- <h5 class="samll-sub mb-1 mt-0"> Our Story </h5> --}}
                        <h2 class="comon-heading m-0" > Welcome to </h2>
                        <p class="mt-2" style="text-align: justify;">
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

    </div> -->

<section class="float-start w-100 body-part pt-0">
      <div class="blog-details-page comon-services-pge py-5">
        <div class="container">
          <div class="row gx-lg-5">
            <div class="col-lg-7 col-xl-8">
              <div class="blog-post">
                <figure class="bigh-shou">
                  <img src="{{ asset('storage/'.$blog->picture) }}" alt="post" />
                </figure>
                <div class="d-md-flex justify-content-between share-div">
                  <ul class="list-unstyled d-flex">
                    
                  <li><i class="far fa-calendar-alt"></i> 
                    {{ \Carbon\Carbon::parse($blog->event_date)->format('M j, Y') }}
                  </li>
                  </ul>
                  <a data-bs-toggle="modal" data-bs-target="">
                    <i class="fas fa-share-alt"></i> Share</a
                  >
                </div>
                <h2 class="comon-heading mt-4">
                 {{ $blog->name }}
                </h2>
                <p>
                  {!! optional($blog)->description !!}
                </p>
              </div>
            </div>
            <div class="col-lg-5 col-xl-4">
              <div class="category-div">
                <h2 class="comon-heading m-0">Categories</h2>
                <ul class="list-unstyled mt-4">
                  @foreach ($blog_type as $type)
                    <li>
                    <a href="{{ route('welocme.blogs' ,['type' => $type->name]) }}">
                      <i class="fas fa-caret-right"></i>
                      {{ $type->name }}</a
                    >
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="recent-post-div mt-5">
                <h2 class="mb-4 comon-heading">Recent Post</h2>
                <div class="recent-post-div-insiide">
                  @foreach ($regent_blogs as $r_blog)
                    <a
                      href="{{ route('welocme.blogs.detial',['uid' => $r_blog->uid]) }}"
                      class="d-flex w-100 justify-content-between align-items-center"
                    >
                      <figure>
                        <img src="{{ asset('storage/'.$r_blog->picture) }}" alt="post" />
                      </figure>
                      <h5>{{ $r_blog->name }}</h5>
                    </a>
                  
                  @endforeach
                  

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
@endsection

@push('js')
@endpush
