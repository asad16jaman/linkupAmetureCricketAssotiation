
<footer class="footer float-start w-100">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-lg-0">
            <!-- Logo + Social -->
            <div class="col-md-6 col-12">
                <div class="comonft-sec d-inline-block w-100">
                            <h5 class="footer-title mb-3">Contact Us</h5>
                            <ul>
                                <li class="my-1">
                                    <a href="{{ route('welocme.photoGalleries')}}" class="d-flex">
                                        <p><i class="fa fa-map-marker contactfont"></i> </p>
                                        <p style="text-align: left;">{{ optional($company)->address }}</p>
                                    </a>
                                </li>
                                <li class="my-1">
                                    <a href="{{ route('welocme.teamMembers')}}" class="d-flex align-items-center">
                                    <p><i class="fa fa-envelope contactfont"></i> </p>
                                    <p>{{ optional($company)->email }} </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
            </div>
            <div class="col-md-6 col-12 mt-3 mt-lg-0">
                <div class="row">
                    <div class="col-5">
                        <div class="comonft-sec d-inline-block w-100">
                            <h5 class="footer-title mb-3"> Usefull Links </h5>
                            <ul>
                                <li class="my-1"><a href="https://ddomain.cricclubs.com/CorporateAmateurcrickettournament/viewTeams.do">Meet The Team
                                    </a></li>
                                <li class="my-1"><a href="{{ route('welocme.photoGalleries')}}">Photo Gallery
                                    </a></li>
                                <li class="my-1"><a href="{{ route('welocme.photoGalleries')}}">Video Gallery
                                    </a></li>
                                <li class="my-1"><a href="{{ route('welocme.contactus') }}">Get In Touch </a></li>
                                <li class="my-1"><a href="{{ route('welocme.aboutus')}}"> About </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-7">
                         <div>
                    <a href="{{ url('/') }}" class="d-flex align-items-center flex-column flex-lg-row">
                        <div class="me-2">
                            <img src="{{ asset('storage') . '/' . optional($company)->logo }}" alt="logo"
                                style="height: 100px; width: auto; object-fit: contain;" />
                        </div>
                        <span class="company-name fw-bold fs-5 text-white company_font">
                            {{ optional($company)->name }}
                        </span>
                    </a>
                </div>
                <div>
                   
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    <a target="_blank" class="socialIcon" href="{{ optional($company)->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" class="socialIcon" href="{{ optional($company)->twiter }}">
                        <i style="font-size: 20px; " class="fab fa-youtube fa-2x"></i>   
                    </a>
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
        .socialIcon{
        background: #112345;
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
            border: 1px solid #fff;
            padding: 7px;
            border-radius: 50%;
        }
    .footer {
        background: #0f66dd;
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
        color: #112345;
        padding-left: 5px;
    }
    .social a {
        color: #fff;
        font-size: 16px;
        transition: 0.3s;
    }
    .social a:hover {
        color: #112345;
        transform: scale(1.2);
    }
    .footer-div1 {
        background: #112345;
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