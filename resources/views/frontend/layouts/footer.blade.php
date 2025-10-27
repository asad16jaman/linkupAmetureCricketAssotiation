<footer class="footer float-start w-100">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-4 gy-lg-0 py">
            <!-- Logo + Social -->
            <div class="col-md-6 col-12">
                <div>
                    <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none">
                        <div class="me-2">
                            <img src="{{ asset('storage') . '/' . optional($company)->logo }}" alt="logo"
                                style="height: 50px; width: auto; object-fit: contain;" />
                        </div>
                        <span class="company-name fw-bold fs-5 text-white company_font">
                            {{ optional($company)->name }}
                        </span>
                    </a>
                </div>
                <div>
                    <p class="footer-text pt-3 footer-mr">{{ optional($company)->footer_text }}</p>
                </div>
                <div class="mt-3 d-flex">
                    <a target="_blank" class="socialIcon" href="{{ optional($company)->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" class="socialIcon" href="{{ optional($company)->twiter }}"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" class="socialIcon" href="{{ optional($company)->linkdin }}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-12 mt-3 mt-lg-0">
                <div class="row">
                    <div class="col-5">
                        <div class="comonft-sec d-inline-block w-100">
                            <h5 class="footer-title mb-3"> Usefull Links </h5>
                            <ul>
                                <li class="my-1"><a href="{{ route('welocme.blogs')}}">Blogs
                                    </a></li>
                                <li class="my-1"><a href="{{ route('welocme.teamMembers')}}">Teams
                                    </a></li>
                                <li class="my-1"><a href="{{ route('welocme.photoGalleries')}}">Photo Gallery
                                    </a></li>
                                <li class="my-1"><a href="{{ route('welocme.contactus') }}">Contact </a></li>
                                <li class="my-1"><a href="{{ route('welocme.aboutus')}}"> About </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="comonft-sec d-inline-block w-100">
                            <h5 class="footer-title mb-3">Contact Us</h5>
                            <ul>
                                <li class="my-1"><a href="{{ route('welocme.blogs')}}"> <i class="fa fa-phone contactfont"></i> 01788954321</li>
                                <li class="my-1"><a href="{{ route('welocme.teamMembers')}}"><i class="fa fa-envelope contactfont"></i> asad@gmail.lcom
                                    </a></li>
                                <li class="my-1"><a href="{{ route('welocme.photoGalleries')}}"><i class="fa fa-map-marker contactfont"></i> flff,dkdlsd
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>


    <div class="footer-div1 mt-4">
        <div class="container">
            <div class="d-flex justify-content-between">
                <p style="font-size:12px" class="footer-copy mb-0 d-none d-md-block">Copyright © {{ date('Y') }}. All Rights Reserved</p>
                <p style="font-size:12px"> Designed & Developed by:<a target="_blank" class="text-white" href="https://linktechbd.com/">Link-Up
                        Technology Ltd.</a> </p>
            </div>
        </div>
    </div>
</footer>


<style>
    /* .footer {
        background: linear-gradient(#00000080, #0009),
            url(" asset('frontend/images/footer.jpg') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 60px 0 0;
        color: #fff;
        font-weight: bold;
    } */

        .socialIcon{
        background: #2bb679;
        border-radius: 49%;
        margin-right: 10px;
        height: 35px;
        display: inline-block;
        width: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .contactfont{
            color: yellow;
            margin-right: 24px;
            margin-top: 10px;
        }
        
    .footer {
        background: #2c2c2c;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /* padding: 60px 0 0; */
        color: #fff;
        font-weight: bold;
    }

    .footer-title {
        color: #fff;
        margin-bottom: 15px;
        font-size: 18px;
        font-weight: bold;
        /* border-bottom: 2px solid #C40E00; */
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
    .company_font{
        font-size: 16px !important
    }

    @media screen and (min-width:1024px) {
        .footer-mr {
            padding-right: 90px;
        }
    }
    @media screen and (max-width:500px){
        .company_font{
            font-size: 12px !important;
        }
    }
</style>