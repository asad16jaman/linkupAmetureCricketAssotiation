@extends('frontend.layouts.app')

@section('title')
     {{ optional($company)->name }}  | Contact
@endsection

@push('css')
    <style>
        /* Gradient text */
        .text-gradient {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .icon {
            width: 50px;
            height: 50px;
        }

        .info-item {
            border-bottom: 4px solid transparent;
            border-image: linear-gradient(90deg, #C40E00, #C40E00);
            border-image-slice: 1;
            transition: 0.3s ease;
        }

        .info-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            border-bottom: 4px solid #ff4b2b;
        }


        .contact-form {
            border: 2px solid #000031;
        }

        .underline {
            width: 60px;
            height: 4px;
            border-radius: 2px;
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            margin-top: 8px;
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
                <h1 class="text-center">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item-"></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
   
    <section class="contact py-5" id="contact">
        <div class="container">

            <!-- Contact Info -->
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="info-item text-center p-4 rounded shadow-lg h-100 position-relative"
                        style="background: #000031">
                        <!-- Icon Top Center -->
                        <div class="icon w3-red text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                            style="width: 60px; height: 60px;">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                                height="28" width="28" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z">
                                </path>
                            </svg>
                        </div>
                        <!-- Text Part -->
                        <div>
                            <h5 class="mb-1 fw-semibold text-white">Address</h5>
                            <p class="mb-0 text-white">
                                {!! optional($company)->address !!}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="info-item text-center p-4 rounded shadow-lg h-100 position-relative"
                        style="background: #000031">

                        <!-- Icon Top Center -->
                        <div class="icon w3-red text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                            style="width: 60px; height: 60px;">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                                </path>
                            </svg>

                        </div>

                        <!-- Text Part -->
                        <div>
                            <h5 class="mb-1 fw-semibold text-white">Call Us</h5>
                            <p class="mb-0 text-white">{{ optional($company)->phone }}</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="info-item text-center p-4 rounded shadow-lg h-100 position-relative"
                        style="background: #000031">

                        <!-- Icon Top Center -->
                        <div class="icon w3-red text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                            style="width: 60px; height: 60px;">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                </path>
                            </svg>
                        </div>

                        <!-- Text Part -->
                        <div>
                            <h5 class="mb-1 fw-semibold text-white">Mail Us</h5>
                            <p class="mb-0 text-white">{{ optional($company)->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-form p-4 rounded shadow-lg bg-light h-100">
                        <div class="d-flex justify-content-center">
                            <div class="text-center">
                                <h3 class="mb-2 text-gradient fw-bold">Contact Us</h3>
                                <div class="underline mx-auto"></div>
                            </div>
                        </div>
                        <form method="post">
                            @csrf
                            <div class="row g-3 mt-3">
                                <div class="col-md-6">
                                    <input type="text" value="{{ old('name') }}"
                                        class="form-control form-control-lg rounded-4 @error('name') is-invalid @enderror"
                                        placeholder="Your Name" name="name" required>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="email" value="{{ old('email') }}" name="email"
                                        class="form-control form-control-lg rounded-4 @error('email') is-invalid @enderror"
                                        placeholder="Your Email" required>
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" value="{{ old('phone') }}" name="phone" class="form-control form-control-lg rounded-4 @error('phone') is-invalid
                                    @enderror" placeholder="Phone Number" required>
                                    @error('phone')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" value="{{ old('subject') }}" name="subject" class="form-control form-control-lg rounded-4 @error('subject') is-invalid
                                    @enderror" placeholder="Subject" required>
                                    @error('subject')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <textarea rows="5" name="message" class="form-control form-control-lg rounded-4 @error('message') is-invalid
                                    @enderror" placeholder="Your Message"
                                        required>{{ old('message') }}</textarea>
                                    <small class="text-mute">Max : 500 Letter</small>
                                    @error('message')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit"
                                        class="btn w3-red px-5 py-2 rounded-pill fw-semibold shadow">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Google Map -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="map-container rounded shadow-lg overflow-hidden" style="height: 400px;">
                        <iframe src="{{ optional($company)->map }}" width="100%" height="455" style="border:1;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Session Message Modal -->
<div class="modal fade" id="sessionModal" tabindex="-1" aria-labelledby="sessionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-header 
            @if(session('success')) bg-success text-white 
            @elseif(session('error')) bg-danger text-white 
            @endif">
        <h5 class="modal-title" id="sessionModalLabel">
            @if(session('success'))
                Success
            @elseif(session('error'))
                Error
            @endif
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        @if(session('success'))
            {{ session('success') }}
        @elseif(session('error'))
            {{ session('error') }}
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>
@endsection

@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            @if(session('success') || session('error'))
                let modal = new bootstrap.Modal(document.getElementById('sessionModal'));
                modal.show();
            @endif
        });
    </script>
@endpush