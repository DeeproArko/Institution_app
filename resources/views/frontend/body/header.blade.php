<!-- Preloader Start -->
<!-- <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div> -->
<!-- Preloader Start -->

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
           
           
            <div class="header-bottom  header-sticky">
                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-xl-12 col-lg-12 col-md-12 header-flex" style="margin-top: 15px; margin-bottom: 15px;">
                            @php
                            $contact = App\Models\Contact::orderBy('id', 'ASC')
                               
                                ->get();
                            @endphp
                            <!-- sticky -->

                            @foreach ($contact as $item)
                                
                           
                            <div class="sticky-logo" style="margin-top: 5px;">
                                <a href="{{ route('index') }}"><img style="width: 70px; margin-top: -7px;" src="{{ asset($item->image) }}" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>                  
                                    <ul id="navigation">
                                    <a href="{{ route('index') }}"><img style="width: 70px; margin-top: -7px;" src="{{ asset($item->image) }}" alt=""></a>
                                    @endforeach
                                    <li><a href="{{ route('index') }}">HOME</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul> --}}
                                        </li>

                                        <li><a href="{{ route('about') }}">ABOUT US</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul> --}}
                                        </li>
                                        @php
                                        $category = App\Models\Category::orderBy('id', 'ASC')
                                           
                                            ->get();
                                        @endphp
                                        <li><a >COURSES</a>
                                        <ul class="submenu">
                                            @foreach ($category as $item)
                                                <li><a href="{{ route('course', $item->id) }}">{{ $item->title }}</a></li>
                                            @endforeach
                                                
                                               
                                            </ul>
                                        </li>

                                        <li><a href="{{ route('success') }}">SUCCESS STORY</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul> --}}
                                        </li>

                                        <li><a href="{{ route('contact') }}">CONTACT</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul> --}}
                                        </li>

                                        <li><a href="">ADDMISSION</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('offline_register') }}">Register Offline</a></li>
                                                <li><a href="{{ route('register') }}">Register Online</a></li>
                                              
                                            </ul>
                                        </li>
                                        

                                        {{-- <li> <form action="">
                                         
                                <div class="nav-search search-switch">
                                    <i class="fa fa-search"></i>
                                </div>
                                    </form></li> --}}

                                    {{-- <li> 
                                        <div>
                                        <i class="fa fa-phone"> 013445 </i> 
                                    </div>
                                  
                                </li> --}}

                                   


                                    @auth
                                    <li><a  href="{{ route('dashboard') }}"> {{ Auth::user()->name }}</a></li>
                                @endauth
                                
                                <!-- If the user is a guest (not logged in) -->
                                @guest
                                <li class="custom-button" ><a style="color:#fff;" href="{{ route('login') }}">Login</a></li>
                                @endguest
                                    </ul>

                                  
                                </nav>
                            </div>
                        </div>

                       
                        
                        <!-- Mobile Menu -->
                        <div class="col-12 ">
                            <div class="mobile_menu d-block d-md-none "></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
