<footer class="footer float-start w-100 pt-4">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-4 gy-lg-0">
            <!-- Logo + Social -->
            <div class="col">
                <div class="comonft-sec w-100  text-lg-start">
                    <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none">
                        <div class="me-2">
                            <img src="{{ asset('storage') . '/' . optional($company)->logo }}" alt="logo"
                                style="height: 50px; width: auto; object-fit: contain;" />
                        </div>
                        <span class="company-name fw-bold fs-5 text-white" style="font-size: 16px !important">
                            {{ optional($company)->name }}
                        </span>
                    </a>

                    <p class="footer-text pt-3">{{ optional($company)->footer_text }}</p>

                    <div class="social d-flex gap-3 justify-content-lg-start mt-3">
                        <a target="_blank" href="{{ optional($company)->facebook }}"><i
                                class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="{{ optional($company)->twiter }}"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="{{ optional($company)->linkdin }}"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col d-grid justify-content-lg-end">
                <div class="comonft-sec d-inline-block w-100">
                    <h5 class="footer-title mb-3"> Contact Info </h5>
                    <ul>
                        <li class="my-1"><a href="#"><i class="fas fa-phone text-danger"></i>&nbsp;
                                {{ optional($company)->phone }} </a></li>
                        <li class="my-1"><a href="#"><i class="fa fa-envelope text-danger"></i>&nbsp;
                                {{ optional($company)->email }} </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col d-grid justify-content-lg-end">
                <div class="comonft-sec d-inline-block w-100">
                    <h5 class="footer-title mb-3"> Quick Links </h5>
                    <ul>
                        <li class="my-1"><a href="{{ route('welocme.blogs')}}"><i class="fa fa-globe text-danger"
                                    aria-hidden="true"></i>&nbsp; Blogs
                            </a></li>
                        <li class="my-1"><a href="{{ route('welocme.teamMembers')}}"><i class="fa fa-globe text-danger"
                                    aria-hidden="true"></i>&nbsp; Teams
                            </a></li>
                        <li class="my-1"><a href="{{ route('welocme.photoGalleries')}}"><i
                                    class="fa fa-globe text-danger" aria-hidden="true"></i>&nbsp; Photo Gallery
                            </a></li>
                    </ul>
                </div>
            </div>

            <div class="col d-grid justify-content-lg-end">
                <div class="comonft-sec d-inline-block w-100">
                    <h5 class="footer-title mb-3"> Support </h5>
                    <ul>
                        <li class="my-1"><a href="{{ route('welocme.contactus') }}"> Contact </a></li>
                        <li class="my-1"><a href="{{ route('welocme.aboutus')}}"> About </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-div1 mt-4">
        <div class="container">
            <div class="d-flex justify-content-between">

                <p class="footer-copy mb-0">Copyright © {{ date('Y') }}. All Rights Reserved</p>
                <p> Designed & Developed by:<a target="_blank" class="text-white"
                        href="https://linktechbd.com/">Link-Up Technology Ltd.</a> </p>
            </div>
        </div>
    </div>
</footer>


<style>
    .footer {
        background: linear-gradient(#00000080, #0009),
            url("{{ asset('frontend/images/footer.jpg') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 60px 0 0;
        color: #fff;
        font-weight: bold;
    }

    .footer-title {
        color: #fff;
        margin-bottom: 15px;
        font-size: 18px;
        font-weight: bold;
        border-bottom: 2px solid #C40E00;
        display: inline-block;
        padding-bottom: 5px;
    }

    .footer-text {
        font-size: 14px;
        line-height: 1.6;
    }

    footer ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    footer ul li {
        margin-bottom: 8px;
    }

    footer ul li a {
        color: #fff;
        text-decoration: none;
        transition: 0.3s;
        font-weight: bold;
    }

    footer ul li a:hover {
        color: #C40E00;
        padding-left: 5px;
    }


    .social a {
        color: #fff;
        font-size: 16px;
        transition: 0.3s;
    }

    .social a:hover {
        color: #C40E00;
        transform: scale(1.2);
    }


    .footer-div1 {
        background: #2bb679;
        /* padding: 12px 0;
    margin-top: 30px; */
    }

    .footer-copy {
        font-size: 14px;
        font-weight: bold;
    }
</style>