<div class="sidebar" data-background-color="white">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="white">
            <a href="{{ route('admin') }}" class="logo">
              <img
                src="{{$company ? asset('storage/'.$company->logo) : asset('assets/admin/img/demoProfile.png') }}"
                alt="navbar brand"
                class="navbar-brand"
                height="40px"
                width="60px"
                
              />
              <!-- <span style="color:#fff;font-size:10px"></span> -->
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ ($page=='home') ? 'active' : '' }}">
                  <a href="/admin">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                <li class="nav-item {{ ($page == 'slider' || $page == 'users' || $page == 'client' || $page == 'wellcome') || $page == 'homedata' || $page == 'feedback' ? 'active' : "" }}">
                <a data-bs-toggle="collapse" href="#web">
                  <i class="fas fa-globe"></i> 
                  <p>Web Content</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="web">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{ route('admin.slider') }}" style="padding: 5px 24px !important">
                        <p class="{{ ($page == 'slider') ? 'sub-item' : 'pl' }}">Slider</p>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('admin.wellcome') }}" style="padding: 5px 24px !important">
                        <p class="{{($page == 'wellcome') ? 'sub-item' : "pl" }}">Wellcome</p>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('admin.home_data') }}" style="padding: 5px 24px !important">
                        <p class="{{($page == 'homedata') ? 'sub-item' : "pl" }}">Home Page</p>
                      </a>
                    </li>
                   <li>
                      <a href="{{ route('admin.feedback') }}" style="padding: 5px 24px !important">
                        <p class="{{ ($page == 'feedback') ? 'sub-item' : "pl" }}">Feedback</p>
                      </a>
                    </li> 
                     <li>
                      <a href="{{ route('admin.client') }}" style="padding: 5px 24px !important">
                        <p class="{{ ($page == 'client') ? 'sub-item' : "pl" }}">Client</p>
                      </a>
                    </li> 
                      <li class="" >
                        <a href="{{ route('admin.users') }}" style="padding: 5px 24px !important">
                          <p class="{{ ($page == 'users') ? 'sub-item' : "pl" }}">Users</p>
                        </a>
                      </li>
                  </ul>
                </div>
              </li>
                <li class="nav-item {{ $page == 'review' ? 'active' : "" }}">
                <a data-bs-toggle="collapse" href="#productss">
                  <i class="fas fa-project-diagram"></i>
                  <p>Blog Management</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="productss">
                  <ul class="nav nav-collapse">
                   {{-- 
                       <li>
                      <a href="{{ route('admin.brand') }}" style="padding: 5px 24px !important">
                        <p class="{{ ($page == 'brand') ? 'sub-item' : 'pl' }}">Event Type</p>
                      </a>
                    </li>
                   --}}
                    {{-- 
                      <li>
                      <a href="{{ route('admin.book') }}" style="padding: 5px 24px !important">
                        <p class="{{ ($page == 'product') ? 'sub-item' : 'pl' }}">Event</p>
                      </a>
                    </li>
                    --}}
                     <li>
                      <a href="{{ route('admin.eventType') }}" style="padding: 5px 24px !important">
                        <p class="{{ ($page == 'brand') ? 'sub-item' : 'pl' }}"> Type</p>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('admin.event') }}" style="padding: 5px 24px !important">
                        <p class="{{ ($page == 'product') ? 'sub-item' : 'pl' }}">Blog</p>
                      </a>
                    </li>
                    {{-- 
                      <li>
                      <a href="{{ route('admin.product.review') }}" style="padding: 5px 24px !important">
                        <p class="{{ ($page == 'review') ? 'sub-item' : 'pl' }}">Product Message</p>
                      </a>
                    </li>
                    --}}
                  </ul>
                </div>
              </li>
              {{-- 
                <li class="nav-item {{ ($page=='service') ? 'active' : '' }}">
                <a href="{{ route('admin.service') }}">
                  <i class="fas fa-wrench"></i>
                  <p>Service</p>
                </a>
              </li>
              --}}
              
              <li class="nav-item {{ ($page=='gallery') ? 'active' : '' }}">
                <a href="{{ route('admin.photogallery') }}">
                 <i class="fas fa-image"></i>
                  <p>Photo Gallery</p>
                </a>
              </li>

              <li class="nav-item {{ ($page=='v-gallery') ? 'active' : '' }}">
                <a href="{{ route('admin.videogallery') }}">
                  <i class="fas fa-video"></i>
                  <p>Video Gallery</p>
                </a>
              </li>

              <li class="nav-item {{ ($page=='management') ? 'active' : '' }}">
                <a href="{{ route('admin.management') }}">
                  <i class="fas fa-futbol"></i>
                  <p>Player</p>
                </a>
              </li>

              <li class="nav-item {{ ($page=='ch') ? 'active' : '' }}">
                <a href="{{ route('admin.ch-message') }}">
                  <i class="fas fa-feather-alt"></i>
                  <p>message</p>
                  
                </a>
              </li>

              {{-- 
                <li class="nav-item {{ ($page=='mision') ? 'active' : '' }}">
                <a href="{{ route('admin.mision') }}">
                  <i class="fas fa-bullseye"></i>
                  <p>Mission & Vision</p>
                  
                </a>
              </li>
              --}}

               
              <li class="nav-item {{ ($page=='about') ? 'active' : '' }}">
                <a href="{{ route('admin.about') }}">
                  <i class="fas fa-info-circle"></i>
                  <p>About Us</p>
                </a>
              </li>
              
              {{-- 
                <li class="nav-item  {{ ($page=='faq') ? 'active' : '' }}">
                <a href="{{ route('admin.faq') }}">
                  <i class="fas fa-question-circle"></i> 
                  <p>Faq</p>
                </a>
              </li>
              --}}

              
                <li class="nav-item {{ ($page=='contact') ? 'active' : '' }}">
                <a href="{{ route('admin.message') }}">
                  <i class="fas fa-envelope"></i>
                  <p>Contact</p>
                </a>
              </li>
              

              
              <li class="nav-item {{ ($page=='company') ? 'active' : '' }}">
                <a href="{{ route('admin.company') }}">
                  <i class="fas fa-building"></i>
                  <p>Company</p>
                  
                </a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </div>