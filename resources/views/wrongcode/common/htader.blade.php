<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <!-- <h1 class="m-0">DGital</h1> -->
                    <div class="logo" id="white-logo">
                        <img src="{{ asset('wrongcode') }}/img/WG_WH.png" alt="Logo">
                      </div>
                      <div class="logo" id="black-logo">
                        <img src="{{ asset('wrongcode') }}/img/WG.png" alt="Logo">
                      </div>
                 	 <!-- <img src="{{ asset('wrongcode') }}/img/WG.png" alt="Logo">  -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{route('root')}}" class="nav-item nav-link {{ Request::routeIs('root') ? 'active' : '' }}">Home</a>
                        <a href="{{route('about')}}" class="nav-item nav-link {{ Request::routeIs('about') ? 'active' : '' }}">About</a>
                        <a href="{{route('service')}}" class="nav-item nav-link {{ Request::routeIs('service') ? 'active' : '' }}">Service</a>
                        <a href="{{route('project')}}" class="nav-item nav-link {{ Request::routeIs('project') ? 'active' : '' }}">Project</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ (Request::routeIs('team') ||Request::routeIs('testimonial')) ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{route('team')}}" class="dropdown-item ">Our Team</a>
                                <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                                <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                            </div>
                        </div>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
                </div>
            </nav>
