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
                              <a  target="_blank" href="{{ optional($company)->twiter }}" class="btn" style="border-radius:0px;"> 

                                <i style="font-size: 20px;" class="fab fa-youtube fa-2x"></i> 

                                </a>
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
      <nav class="navbar navbar-expand-lg navbar-light" style="background: #112345">
          <div class="container">
             

              <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none">
                  <div class="me-2">
                      <img src="{{ $company->logo ? asset('storage/'.$company->logo) : '' }}"
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
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"
                              role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              By-Laws
                          </a>
                          <ul class="dropdown-menu py-0 my-0" aria-labelledby="navbarDropdown">
                            @foreach ($bylaw as $law)
                                <li>
                                    <a class="dropdown-item w3-text-white py-2"
                                      href="{{ url('storage/'.$law->file) }}" target="_blank">{{ $law->navName }}</a>
                                </li>
                            @endforeach
                          </ul>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link text-white {{ Route::is('welocme.aboutus') ? 'active' : '' }}" href="{{ route('welocme.aboutus') }}">About</a>
                      </li>

                      

                      <li class="nav-item">
                          <a class="nav-link text-white {{ Route::is('welocme.teamMembers') ? 'active' : '' }}" target="_blank" href="https://ddomain.cricclubs.com/CorporateAmateurcrickettournament/viewTeams.do">Teams</a>
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

                      {{-- <li class="nav-item">
                          <a class="nav-link text-white {{ Route::is('welocme.blogs') ? 'active' : '' }}" href="{{ route('welocme.blogs') }}">Blog</a>
                      </li> --}}

                      

                      <li class="nav-item">
                          <a class="nav-link text-white {{ Route::is('welocme.contactus') ? 'active' : '' }}" href="{{ route('welocme.contactus') }}">Contact</a>
                      </li>

                  </ul>
              </div>
             
          </div>
      </nav>
  </header>
