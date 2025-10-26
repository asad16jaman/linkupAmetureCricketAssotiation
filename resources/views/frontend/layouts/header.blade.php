  <header class="float-start w-100 fixed-top">
      <div class="top-new-heda py-0 w-100">
          <div class="container">
              <div class="row row-cols-2 align-items-center">
                  <div class="col">

                  </div>
                  <div class="col d-grid justify-content-end">
                      <ul class="top-socli d-flex align-items-center">
                          <li>
                              <span style="white-space: nowrap;">Follow us</span>
                          </li>
                          <li class="ms-3 d-flex">
                              <a  target="_blank" href="{{ optional($company)->facebook }}" class="btn" style="border-radius:0px;"> <i
                                      class="fab fa-facebook-f"></i> </a>
                              <a  target="_blank" href="{{ optional($company)->twiter }}" class="btn" style="border-radius:0px;"> <svg
                                      xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                      fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                      <path
                                          d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                  </svg> </a>
                          </li>
                          <li>
                              <button type="button" class="btn bar-btn-links d-block d-lg-none w3-white"
                                  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightmobile">
                                  <span class="w3-text-red">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                          fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                                          <path
                                              d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z" />
                                      </svg>
                                  </span>
                              </button>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light" style="background: #2bb679">
          <div class="container">
              {{-- <a class=" py-0" href="{{ url('/') }}">
                  <div class="" style="width: 100%; display: flex;">
                      <div class="" style="width: 100%">
                          <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->logo()]) }}"
                             alt="logo" />
                      </div>
                      <div class="">
                          <a href="{{ url('/') }}" class="company-name element">Corporate Amatcur Cricket
                              Association </a>
                      </div>
                  </div>
              </a> --}}

              <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none">
                  <div class="me-2">
                      <img src="{{ $company->logo ? asset('storage/'.$company->logo) : "" }}"
                          alt="logo" style="height: 36px; width: auto; object-fit: contain;" />
                  </div>
                  <span class="company-name fw-bold fs-5 text-white">
                      {{ optional($company)->name }}
                  </span>
              </a>

              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <!-- mx-auto -->
                  <ul class="navbar-nav  mb-2 mb-lg-0">

                      <li class="nav-item">
                          <a class="nav-link text-white {{ Route::is('welcome') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-white {{ Route::is('welocme.aboutus') ? 'active' : '' }}" href="{{ route('welocme.aboutus') }}">About</a>
                      </li>


                      <li class="nav-item">
                          <a class="nav-link text-white {{ Route::is('welocme.teamMembers') ? 'active' : '' }}" href="{{ route('welocme.teamMembers') }}">Teams</a>
                      </li>



                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-white {{ Route::is('welocme.photoGalleries') || Route::is('welocme.videoGalleries') ? 'active' : '' }}" href="#" id="navbarDropdown"
                              role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Gallery
                          </a>
                          <ul class="dropdown-menu py-0 my-0" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item w3-text-white py-2"
                                      href="{{ route('welocme.photoGalleries') }}">Photo Gallery</a></li>
                              <li><a class="dropdown-item w3-text-white py-2"
                                      href="{{ route('welocme.videoGalleries') }}">Video Gallery</a></li>
                          </ul>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-white {{ Route::is('welocme.blogs') ? 'active' : '' }}" href="{{ route('welocme.blogs') }}">Blog</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-white {{ Route::is('welocme.contactus') ? 'active' : '' }}" href="{{ route('welocme.contactus') }}">Contact</a>
                      </li>

                  </ul>
              </div>
              {{-- <div class="right-top py-0">
                <ul class="d-flex align-items-center">
                  <li>
                    <div class="d-none d-md-block">
                        <span class="m-0 oipn">
                            <div class="input-group input-group-sm">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="fas fa-search"></i>
                                </span>
                                <input type="search" class="form-control border-start-0" placeholder="Search..." aria-controls="matchess">
                            </div>
                        </span>
                    </div>
                  </li>

                  <li>
                    <button type="button" class="btn bar-btn-links d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightmobile">
                      <span class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                          <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                        </svg>
                      </span>
                    </button>
                  </li>
                </ul>
              </div> --}}
          </div>
      </nav>
  </header>
