<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_top_wrap d-flex justify-content-between align-items-center">
                            <div class="text_wrap">
                                <p><span>{{ config('sekolah.telp') }}</span> <span>{{ config('sekolah.email') }}</span></p>
                            </div>
                            <div class="text_wrap">
                                <p>
                                    <a href="{{ route('login') }}"> <i class="ti-user"></i>  Login</a> 
                                    <a href="{{ route('daftar') }}">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_wrap d-flex justify-content-between align-items-center">
                            <div class="header_left">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ asset('frontend') }}/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="header_right d-flex align-items-center">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="/">Home</a></li>
                                            <li><a href="#">Berita</a></li>
                                            <li><a href="Courses.html">Courses</a></li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="Event.html">Event</a></li>
                                                    <li><a href="event_details.html">Event Details</a></li>
                                                    <li><a href="Admissions.html">Admissions</a></li>
                                                    <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Apply NOw</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->