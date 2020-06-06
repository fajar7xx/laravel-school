@extends('frontend.layouts.main')

@section('content')
        <!-- slider_area_start -->
        <div class="slider_area">
            <div class="slider_active owl-carousel">
                <!-- single_carouse -->
                <div class="single_slider  d-flex align-items-center slider_bg_1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slider_text ">
                                    <h3>Boost up your skills <br>
                                        with a new way of <br>
                                        learning.</h3>
                                    <a href="#" class="boxed-btn3">Get Start</a>
                                    <a href="#" class="boxed-btn4">Take a tour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ single_carouse -->
                <!-- single_carouse -->
                <div class="single_slider  d-flex align-items-center slider_bg_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slider_text ">
                                    <h3>Boost up your skills <br>
                                        with a new way of <br>
                                        learning.</h3>
                                    <a href="#" class="boxed-btn3">Get Start</a>
                                    <a href="#" class="boxed-btn4">Take a tour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ single_carouse -->
                <!-- single_carouse -->
                <div class="single_slider  d-flex align-items-center slider_bg_1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slider_text ">
                                    <h3>Boost up your skills <br>
                                        with a new way of <br>
                                        learning.</h3>
                                    <a href="#" class="boxed-btn3">Get Start</a>
                                    <a href="#" class="boxed-btn4">Take a tour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ single_carouse -->
            </div>
        </div>
        <!-- slider_area_end -->
    
        <!-- service_area_start  -->
        <div class="service_area gray_bg">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service d-flex align-items-center ">
                            <div class="icon">
                                <i class="flaticon-school"></i>
                            </div>
                            <div class="service_info">
                                <h4>Scholarship</h4>
                                <p>Available</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service d-flex align-items-center ">
                            <div class="icon">
                                <i class="flaticon-error"></i>
                            </div>
                            <div class="service_info">
                                <h4>Scholarship</h4>
                                <p>Available</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_service d-flex align-items-center ">
                            <div class="icon">
                                <i class="flaticon-book"></i>
                            </div>
                            <div class="service_info">
                                <h4>Scholarship</h4>
                                <p>Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ service_area_start  -->
    
        <!-- popular_program_area_start  -->
        <div class="popular_program_area section__padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3>Popular Program</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="custom_tabs text-center">
                            <div class="nav" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Graduate                                </a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Postgraduate </a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">PHD Scholarships</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact" aria-selected="false">Training</a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="{{ asset('frontend') }}/img/program/1.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Chemical engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Apply NOw</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="{{ asset('frontend') }}/img/program/2.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Mechanical engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Apply NOw</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="{{ asset('frontend') }}/img/program/3.png" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>Agriculture</span>
                                        <h4>Bio engneering</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        <a href="#" class="boxed-btn5">Apply NOw</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{ asset('frontend') }}/img/program/1.png" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>Agriculture</span>
                                            <h4>Chemical engneering</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                            <a href="#" class="boxed-btn5">Apply NOw</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{ asset('frontend') }}/img/program/3.png" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>Agriculture</span>
                                            <h4>Mechanical engneering</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                            <a href="#" class="boxed-btn5">Apply NOw</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{ asset('frontend') }}/img/program/2.png" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>Agriculture</span>
                                            <h4>Bio engneering</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                            <a href="#" class="boxed-btn5">Apply NOw</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{ asset('frontend') }}/img/program/3.png" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>Agriculture</span>
                                            <h4>Chemical engneering</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                            <a href="#" class="boxed-btn5">Apply NOw</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{ asset('frontend') }}/img/program/2.png" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>Agriculture</span>
                                            <h4>Mechanical engneering</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                            <a href="#" class="boxed-btn5">Apply NOw</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{ asset('frontend') }}/img/program/1.png" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>Agriculture</span>
                                            <h4>Bio engneering</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                            <a href="#" class="boxed-btn5">Apply NOw</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{ asset('frontend') }}/img/program/2.png" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>Agriculture</span>
                                            <h4>Chemical engneering</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                            <a href="#" class="boxed-btn5">Apply NOw</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{ asset('frontend') }}/img/program/1.png" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>Agriculture</span>
                                            <h4>Mechanical engneering</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                            <a href="#" class="boxed-btn5">Apply NOw</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{ asset('frontend') }}/img/program/3.png" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>Agriculture</span>
                                            <h4>Bio engneering</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                            <a href="#" class="boxed-btn5">Apply NOw</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-lg-12">
                        <div class="course_all_btn text-center">
                            <a href="Courses.html" class="boxed-btn4">View All course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- popular_program_area_end -->
    
        <!-- latest_coures_area_start  -->
        <div class="latest_coures_area">
            <div class="latest_coures_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="coures_info">
                                <div class="section_title white_text">
                                    <h3>Latest Courses</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation.</p>
                                </div>
                                <div class="coures_wrap d-flex">
                                    <div class="single_wrap">
                                        <div class="icon">
                                            <i class="flaticon-lab"></i>
                                        </div>
                                        <h4>Bachelor of <br>
                                            Graphic Design</h4>
                                            <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt ut piscing vcs.</p>
                                            <a href="#" class="boxed-btn5">Apply NOw</a>
                                    </div>
                                    <div class="single_wrap">
                                        <div class="icon">
                                            <i class="flaticon-lab"></i>
                                        </div>
                                        <h4>Bachelor of <br>
                                            Graphic Design</h4>
                                            <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt ut piscing vcs.</p>
                                            <a href="#" class="boxed-btn5">Apply NOw</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ latest_coures_area_end -->
    
        <!-- recent_event_area_strat  -->
        <div class="recent_event_area section__padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section_title text-center mb-70">
                            <h3 class="mb-45">Recent Event</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="single_event d-flex align-items-center">
                            <div class="date text-center">
                                <span>02</span>
                                <p>Dec, 2020</p>
                            </div>
                            <div class="event_info">
                                <a href="event_details.html">
                                    <h4>How to speake like a nativespeaker?</h4>
                                 </a>
                                <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                            </div>
                        </div>
                        <div class="single_event d-flex align-items-center">
                            <div class="date text-center">
                                <span>03</span>
                                <p>Dec, 2020</p>
                            </div>
                            <div class="event_info">
                                <a href="event_details.html">
                                    <h4>How to speake like a nativespeaker?</h4>
                                 </a>
                                <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                            </div>
                        </div>
                        <div class="single_event d-flex align-items-center">
                            <div class="date text-center">
                                <span>10</span>
                                <p>Dec, 2020</p>
                            </div>
                            <div class="event_info">
                                <a href="event_details.html">
                                    <h4>How to speake like a nativespeaker?</h4>
                                 </a>
                                <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- recent_event_area_end  -->
    
        <!-- latest_coures_area_start  -->
        <div data-scroll-index='1' class="admission_area">
            <div class="admission_inner">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-7">
                            <div class="admission_form">
                                <h3>Apply for Admission</h3>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single_input">
                                                <input type="text" placeholder="First Name" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single_input">
                                                <input type="text" placeholder="Last Name" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single_input">
                                                <input type="text" placeholder="Phone Number" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single_input">
                                                <input type="text" placeholder="Email Address" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single_input">
                                                <textarea cols="30" placeholder="Write an Application" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="apply_btn">
                                                <button class="boxed-btn3" type="submit">Apply Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ latest_coures_area_end -->
    
    
        <!-- recent_news_area_start  -->
        <div class="recent_news_area section__padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section_title text-center mb-70">
                            <h3 class="mb-45">Berita Terbaru</h3>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($berita as $item)
                    <div class="col-md-6">
                        <div class="single__news">
                            <div class="thumb">
                                <a href="{{ route('berita.detail', $item->slug) }}">
                                    <img src="{{ $item->thumbnail() }}" alt="">
                                </a>
                                <span class="badge">Group Study</span>
                            </div>
                            <div class="news_info">
                                <a href="{{ route('berita.detail', $item->slug) }}">
                                    <h4>{{ $item->judul }}</h4>
                                </a>
                                <p class="d-flex align-items-center"> 
                                    <span><i class="flaticon-calendar-1"></i>{{ $item->created_at->format('D, d M Y') }}</span> 
                                    <span> <i class="flaticon-users"></i>Author: {{ $item->user->name }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- recent_news_area_end  -->
@endsection