<!doctype html>
<html lang="en">
<!-- Mirrored from oxentictemplates.in/templatemonster/cricket-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Sep 2025 11:43:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('storage').'/'.optional($company)->logo }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700;800&amp;family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,700&amp;family=Dancing+Script:wght@400;500;600;700&amp;family=Montserrat:wght@200;300;400;500;600;700;800;900&amp;family=Open+Sans:wght@400;500;600;700&amp;family=Oswald:wght@300;400;500;600;700&amp;family=Poppins:wght@200;300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;family=Teko:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="{{ asset('frontend/css/w3.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">

    <style>
        .sub-main-banner {
            margin-top: -12px;
        }
        body {
            padding-top: 105px;
        }
        .f-900{
            font-weight: 900;
        }
        header {
            z-index: 1030;
        }
        .scroll-to-top {
            background-color: white;
            right: 40px;
            bottom: 40px;
            position: fixed;
            z-index: 2;
            cursor: pointer;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            box-shadow: 0 9px 25px 0 rgba(132, 128, 177, 0.28);
            border: none;
            color: #fff !important;
        }
        :not(.portfolio-item) {
            transition: all .2s linear;
        }
        .scroll-to-top {
                align-items: center;
                background: #2bb679 !important;
                border-radius: 50% !important;
                bottom: 1rem !important;
                box-shadow: var(--box-shadow);
                display: flex;
                height: 2rem !important;
                justify-content: center;
                right: 1rem !important;
                text-align: center;
                transition: all .2s;
                width: 2rem !important;
                z-index: 900 !important;
                color: #fff !important;
        }
        .scroll-to-top:hover {
            transform: translateY(-4px);
            background: #000031;
        }
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
            opacity: 1;
            transform: translateY(0);
            visibility: visible;

        }
        .dropdown-menu {
            display: block;
            opacity: 0;
            transform: translateY(10px);
            visibility: hidden;
            transition: all 0.3s ease;
            top: 56px;
            background: #000031;
        }
        .nav-item.dropdown .dropdown-menu .dropdown-item:hover {
            background: #2bb679;
        }
        .dropdown-toggle::after {
            display: none !important;
        }
        .dropdown-toggle::before {
            display: none !important;
        }
        .company-name {
            font-size: 20px !important;
            font-weight: 700 !important;
            color: #fff;
            padding-left: 10px;
        }
        .company-name:hover {
            color: #fff;

        }
        .mobile-menu-sec ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .mobile-menu-sec ul li {
            border-bottom: 1px solid #ddd;
        }
        .mobile-menu-sec ul li a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #000;
        }
        .mobile-menu-sec ul li.has-dropdown>a::after {
            content: "▾";
            /* Arrow */
            float: right;
            font-size: 14px;
            transition: transform 0.3s;
        }
        .mobile-menu-sec ul li.active-dropdown>a::after {
            transform: rotate(180deg);
        }
        .mobile-menu-sec ul .dropdown-menu {
            display: none;
            background: #f8f9fa;
            padding-left: 20px;
        }
        .mobile-menu-sec ul li.active-dropdown>.dropdown-menu {
            display: block;
        }
        @media screen and (max-width:500px){
            .company-name{
                font-size: 12px !important;
            }
        }
    </style>
    @stack('css')
</head>

<body>

    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')

    <div class="modal fade login-div-modal" id="memberModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="https://oxentictemplates.in/templatemonster/cricket-new/index.html" method="get">
                        <div class="com-div-md">
                            <h5 class="text-center mb-3"> Become A Member </h5>
                            <button type="button" class="close" data-bs-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                            <div class="login-modal-pn">
                                <div class="cm-select-login mt-0">
                                    <div class="country-dp">

                                        <input type="text" name="fullname" class="form-control"
                                            placeholder="Full Name" required />
                                    </div>
                                    <div class="phone-div">

                                        <input type="email" name="phone" class="form-control"
                                            placeholder="Email or Phone Number" required />
                                    </div>
                                    <div class="phone-div">

                                        <input type="password" name="password" class="form-control"
                                            placeholder="Create Password" required />
                                    </div>
                                    <div class="phone-div">

                                        <input type="password" name="confirmpassword" class="form-control"
                                            placeholder="Confirm Password" required />
                                    </div>

                                    <div class="forget2 mt-3 ml-3 d-flex justify-content-between">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1"> By clicking Register, you
                                            agree to our
                                            Terms of Use
                                            and
                                            Cookie Policy</label>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn continue-bn"> Register </button>
                            </div>
                            <p class="text-center  mt-3"> Do not have an account?
                                <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#loginModal"
                                    data-bs-dismiss="modal"> Login </a>
                            </p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" id="offcanvasRightmobile">
        <div class="offcanvas-header py-0">
            <button type="button" class="close-menu mt-4" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                </svg>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="head-contact d-block d-lg-none">
                <a href="{{ url('/') }}" class="logo-side">
                    <img src="{{ $company->logo ? asset('storage/'.$company->logo) : "" }}"
                        style="height: 50px; width: auto; object-fit: contain;" alt="logo" />
                </a>
                <div class="mobile-menu-sec mt-3">
                    <ul>
                        <li class="active-m">
                            <a href="{{ url('/') }}"> Home </a>
                        </li>
                        <li>
                            <a href="{{ route('welocme.aboutus') }}"> About </a>
                        </li>
                        <li>
                            <a href="{{ route('welocme.teamMembers') }}"> Teams </a>
                        </li>
                        <!-- Dropdown End -->
                        <li>
                            <a href="{{ route('welocme.photoGalleries') }}"> Photo Gallery </a>
                        </li>
                        <li>
                            <a href="{{ route('welocme.videoGalleries') }}"> Video Gallery </a>
                        </li>
                        <li>
                            <a href="{{ route('welocme.blogs') }}"> Blog </a>
                        </li>
                        <li>
                            <a href="{{ route('welocme.contactus') }}"> Contact </a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>





    <button class="scroll-to-top" aria-label="Scroll to top">
        <i class="fa fa-arrow-up w3-large"></i>
    </button>



    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let dropdownToggles = document.querySelectorAll(".mobile-menu-sec .has-dropdown > a");

            dropdownToggles.forEach(function(toggle) {
                toggle.addEventListener("click", function(e) {
                    e.preventDefault();
                    let parentLi = this.parentElement;
                    parentLi.classList.toggle("active-dropdown");
                });
            });
        });
    </script>





    <script>
        const scrollBtn = document.querySelector(".scroll-to-top");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                scrollBtn.style.display = "flex"; // show
            } else {
                scrollBtn.style.display = "none"; // hide
            }
        });

        scrollBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
        scrollBtn.style.display = "none";
    </script>


    <script>
        $(document).ready(function() {
            $('.upcomin-matches').owlCarousel({
                loop: true,
                margin: 50,
                autoplay: true,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    667: {
                        items: 2
                    },
                    820: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    },
                    1180: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    }
                }
            })
            $('.slider-sertu').owlCarousel({
                loop: true,
                margin: 30,
                dots: false,
                nav: true,
                mouseDrag: false,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },

                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            })

            

            // Custom Next Prev
            $('.owl-player-custom-nav .next').click(function() {
                shopSlider.trigger('next.owl.carousel');
            });

            $('.owl-player-custom-nav .prev').click(function() {
                shopSlider.trigger('prev.owl.carousel', [300]); 
            });


            $('.team-membern').owlCarousel({
                loop: true,
                margin: 30,
                autoplay: true,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    667: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })

            $('.result-sliden').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                nav: false,
                mouseDrag: false,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    820: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })



            var patner = $('.sponj-slide');
            patner.owlCarousel({
                loop: true,
                margin: 30,
                autoplay: true,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    375: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    667: {
                        items: 2
                    },
                    1000: {
                        items: 5
                    },

                }
            });


            $('.owl-patner-custom-nav .next').click(function() {
                video.trigger('next.owl.carousel');
            });

            $('.owl-patner-custom-nav .prev').click(function() {
                video.trigger('prev.owl.carousel', [300]);
            });



            var video = $('.coverages-slider');
            video.owlCarousel({
                loop: true,
                margin: 30,
                autoplay: true,
                nav: false,
                dots: true,
                rtl: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    667: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    },
                    1024: {
                        items: 4
                    }
                }
            });


            $('.owl-video-custom-nav .next').click(function() {
                video.trigger('next.owl.carousel');
            });

            $('.owl-video-custom-nav .prev').click(function() {
                video.trigger('prev.owl.carousel', [300]);
            });




            var gallery = $('.photo-gallery');
            gallery.owlCarousel({
                loop: true,
                margin: 30,
                autoplay: true,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    667: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            // Custom Next Prev
            $('.owl-gallery-custom-nav .next').click(function() {
                gallery.trigger('next.owl.carousel');
            });

            $('.owl-gallery-custom-nav .prev').click(function() {
                gallery.trigger('prev.owl.carousel', [300]);
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            var myCarousel = document.querySelector('#carouselExampleFade')
            var carousel = new bootstrap.Carousel(carouselExampleFade, {
                interval: 90000,
            })
        });
    </script>



    <script>
        $(document).ready(function() {
            //YOUTUBE VIDEO
            $('.play-button').click(function(e) {
                var iframeEl = $('<iframe>', {
                    src: $(this).data('url')
                });
                $('#youtubevideo').attr('src', $(this).data('url'));
            })

            $('#close-video').click(function(e) {
                $('#youtubevideo').attr('src', '');
            });


        });
    </script>


    <script>
        //    init();

        // function init(){
        //     var videoplaylist = document.getElementById('videoplaylist');
        //     var playlist = document.getElementById('playlist');
        //     var tracks = playlist.getElementsByTagName('a');
        //     videoplaylist.volume = 0.10;
        //     videoplaylist.play();

        //     for(var track in tracks) {
        //       var link = tracks[track];
        //       if(typeof link === "function" || typeof link === "number") continue;

        // 			link.addEventListener('click', function(e) {
        //       	e.preventDefault();
        //         var song = this.getAttribute('href');
        //        	run(song, videoplaylist, this);
        //       });
        //     }

        //     videoplaylist.addEventListener('ended',function(e) {
        //         for(var track in tracks) {
        // 					var link = tracks[track];
        //           var nextTrack = parseInt(track) + 1;
        //         	if(typeof link === "function" || typeof link === "number") continue;
        //           if(!this.src) this.src = tracks[0];
        //           if(track == (tracks.length - 1)) nextTrack = 0;
        //                                 	console.log(nextTrack);
        //         	if(link.getAttribute('href') === this.src) {
        //           	var nextLink = tracks[nextTrack];
        //           	run(nextLink.getAttribute('href'), videoplaylist, nextLink);
        //             break;
        //           }
        //         }
        //     });
        // }

        function run(song, videoplaylist, link) {
            var parent = link.parentElement;

            //quitar el active de todos los elementos de la lista
            var items = parent.parentElement.getElementsByTagName('li');
            for (var item in items) {
                if (items[item].classList)
                    items[item].classList.remove("active");
            }

            //agregar active a este elemento
            parent.classList.add("active");

            //tocar la cancion
            videoplaylist.src = song;
            videoplaylist.load();
            videoplaylist.play();
        }
    </script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, {
                delay: 4000 // ৪ সেকেন্ড পরে auto hide
            });
        });
        toastList.forEach(toast => toast.show());
    });
</script>
    @stack('js')
</body>

<!-- Mirrored from oxentictemplates.in/templatemonster/cricket-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Sep 2025 11:46:39 GMT -->

</html>
