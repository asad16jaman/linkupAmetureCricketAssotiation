

<aside class="app-sidebar sticky" id="sidebar">
    <div class="main-sidebar-header bg-dark text-white">
        <a href="{{ url('/') }}" class="header-logo d-flex align-items-center">
            <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->logo()]) }}"
                 alt="logo"
                 class="img-fluid"
                 style="height: 40px; width: auto; object-fit: contain;" />
            <span class="ms-2 text-white">{{ Str::limit($ws->title, 20) }}</span>
        </a>
    </div>


    <div class="main-sidebar bg-dark text-white" id="sidebar-scroll">
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>

            <ul class="main-menu">

                <li class="slide">
                    <a href="{{ route('dashboard') }}" class="side-menu__item py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon text-white" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"/>
                            <path d="M104,216V152h48v64h64V120a8,8,0,0,0-2.34-5.66l-80-80a8,8,0,0,0-11.32,0l-80,80A8,8,0,0,0,40,120v96Z"
                                  fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="16"/>
                        </svg>
                        <span class="side-menu__label text-white"><b>Dashboard</b></span>
                    </a>
                </li>

                {{-- <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon text-white" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"/>
                            <rect x="32" y="48" width="192" height="160" rx="8"
                                  fill="none" stroke="currentColor" stroke-width="16"/>
                            <line x1="80" y1="96" x2="176" y2="96"
                                  stroke="currentColor" stroke-width="16"/>
                            <line x1="80" y1="128" x2="176" y2="128"
                                  stroke="currentColor" stroke-width="16"/>
                            <line x1="80" y1="160" x2="176" y2="160"
                                  stroke="currentColor" stroke-width="16"/>
                        </svg>
                        <span class="side-menu__label text-white"><b>Cetegory</b></span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li><a href="" class="side-menu__item text-white"><b>Cetegory List</b></a></li>
                     
                    </ul>
                </li> --}}


                <li class="slide has-sub open">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon text-white" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><rect x="48" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect><rect x="144" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect><rect x="48" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect><rect x="144" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect></svg>
                        <span class="side-menu__label text-white">Category</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1" style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate(16px, 1036px); display: block; box-sizing: border-box;" data-popper-placement="bottom" data-popper-escaped="">
                     
                        <li class="slide has-sub open">
                            <a href="javascript:void(0);" class="side-menu__item text-white">Category
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2" style="box-sizing: border-box; display: block;">
                                <li class="slide">
                                    <a href="" class="side-menu__item text-white">Create</a>
                                </li>
                                <li class="slide">
                                    <a href="" class="side-menu__item text-white">List</a>
                                </li>
                              
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item text-white">Sub cetegory
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="" class="side-menu__item text-white">Create</a>
                                </li>
                                <li class="slide">
                                    <a href="" class="side-menu__item text-white">List</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item text-white">Child category
                                <i class="ri-arrow-right-s-line side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="" class="side-menu__item text-white">Create</a>
                                </li>
                                <li class="slide">
                                    <a href="" class="side-menu__item text-white">List</a>
                                </li>
                             
                            </ul>
                        </li>
                    </ul>
                </li>



                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon text-white" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"/>
                            <rect x="48" y="48" width="64" height="64" rx="8"
                                  fill="none" stroke="currentColor" stroke-width="16"/>
                            <rect x="144" y="48" width="64" height="64" rx="8"
                                  fill="none" stroke="currentColor" stroke-width="16"/>
                            <rect x="48" y="144" width="64" height="64" rx="8"
                                  fill="none" stroke="currentColor" stroke-width="16"/>
                            <rect x="144" y="144" width="64" height="64" rx="8"
                                  fill="none" stroke="currentColor" stroke-width="16"/>
                        </svg>
                        <span class="side-menu__label text-white"><b>Team Members</b></span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li><a href="{{ route('admin.teamMemberCreate') }}" class="side-menu__item text-white"><b>Create</b></a></li>
                        <li><a href="{{ route('admin.teamMembersAll') }}" class="side-menu__item text-white"><b>List</b></a></li>
                    </ul>
                </li>

              

             
                <li class="slide">
                    <a href="{{ route('admin.slidersAll') }}" class="side-menu__item py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon text-white" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"/>
                            <polyline points="32 176 128 232 224 176"
                                      fill="none" stroke="currentColor" stroke-width="16"/>
                            <polyline points="32 128 128 184 224 128"
                                      fill="none" stroke="currentColor" stroke-width="16"/>
                            <polygon points="32 80 128 136 224 80 128 24 32 80"
                                     fill="none" stroke="currentColor" stroke-width="16"/>
                        </svg>
                        <span class="side-menu__label text-white"><b>Slider</b></span>
                    </a>
                </li>

              
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon text-white" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"/>
                            <rect x="32" y="48" width="192" height="160" rx="8"
                                  fill="none" stroke="currentColor" stroke-width="16"/>
                            <line x1="80" y1="96" x2="176" y2="96"
                                  stroke="currentColor" stroke-width="16"/>
                            <line x1="80" y1="128" x2="176" y2="128"
                                  stroke="currentColor" stroke-width="16"/>
                            <line x1="80" y1="160" x2="176" y2="160"
                                  stroke="currentColor" stroke-width="16"/>
                        </svg>
                        <span class="side-menu__label text-white"><b>Pages</b></span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li><a href="{{ route('admin.aboutUs') }}" class="side-menu__item text-white"><b>About Us</b></a></li>
                        <li><a href="{{ route('admin.chairmanMessage') }}" class="side-menu__item text-white"><b>Chairman</b></a></li>
                        <li><a href="{{ route('admin.welcomeMessage') }}" class="side-menu__item text-white"><b>Welcome Message</b></a></li>
                    </ul>
                </li>

           
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon text-white" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"/>
                            <rect x="48" y="48" width="64" height="64" rx="8"
                                  fill="none" stroke="currentColor" stroke-width="16"/>
                            <rect x="144" y="48" width="64" height="64" rx="8"
                                  fill="none" stroke="currentColor" stroke-width="16"/>
                            <rect x="48" y="144" width="64" height="64" rx="8"
                                  fill="none" stroke="currentColor" stroke-width="16"/>
                            <rect x="144" y="144" width="64" height="64" rx="8"
                                  fill="none" stroke="currentColor" stroke-width="16"/>
                        </svg>
                        <span class="side-menu__label text-white"><b>Users</b></span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li><a href="{{ route('admin.userCreate') }}" class="side-menu__item text-white"><b>Create</b></a></li>
                    </ul>
                </li>

            
                <li class="slide">
                    <a href="{{ route('admin.setting') }}" class="side-menu__item py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon text-white" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"/>
                            <path d="M41.43,178.09A99.14,99.14,0,0,1,31.36,153.8l16.78-21a81.59,81.59,0,0,1,0-9.64l-16.77-21a99.43,99.43,0,0,1,10.05-24.3l26.71-3a81,81,0,0,1,6.81-6.81l3-26.7A99.14,99.14,0,0,1,102.2,31.36l21,16.78a81.59,81.59,0,0,1,9.64,0l21-16.77a99.43,99.43,0,0,1,24.3,10.05l3,26.71a81,81,0,0,1,6.81,6.81l26.7,3a99.14,99.14,0,0,1,10.07,24.29l-16.78,21a81.59,81.59,0,0,1,0,9.64l16.77,21a99.43,99.43,0,0,1-10,24.3l-26.71,3a81,81,0,0,1-6.81,6.81l-3,26.7a99.14,99.14,0,0,1-24.29,10.07l-21-16.78a81.59,81.59,0,0,1-9.64,0l-21,16.77a99.43,99.43,0,0,1-24.3-10l-3-26.71a81,81,0,0,1-6.81-6.81Z"
                                  fill="none" stroke="currentColor" stroke-width="16"/>
                        </svg>
                        <span class="side-menu__label text-white"><b>Company Profile</b></span>
                    </a>
                </li>

            </ul>

         
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>

        </nav>
    </div>

</aside>
