 <!-- footer start -->
 <footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="newsLetter_wrap">
                <div class="row justify-content-between">
                    <div class="col-md-7">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Stay Updated
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Email Address">
                                <button type="submit">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Stay Updated
                            </h3>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            About Us
                        </h3>
                        <ul>
                            <li><a href="#">Online Learning</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Press Center</a></li>
                            <li><a href="#">Become an Instructor</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Campus
                        </h3>
                        <ul>
                            <li><a href="#">Our Plans</a></li>
                            <li><a href="#">Free Trial</a></li>
                            <li><a href="#">Academic Solutions</a></li>
                            <li><a href="#">Business Solutions</a></li>
                            <li><a href="#">Government Solutions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Study
                        </h3>
                        <ul>
                            <li><a href="#">Admissions Policy</a></li>
                            <li><a href="#">Getting Started</a></li>
                            <li><a href="#">Visa Information</a></li>
                            <li><a href="#">Tuition Calculator</a></li>
                            <li><a href="#">Request Information</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Support
                        </h3>
                        <ul>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">System Requirements</a></li>
                            <li><a href="#">Register Activation Key</a></li>
                            <li><a href="#">Site feedback</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->

@yield('modal')


<!-- JS here -->
<script src="{{ asset('frontend') }}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{ asset('frontend') }}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ asset('frontend') }}/js/popper.min.js"></script>
<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
<script src="{{ asset('frontend') }}/js/ajax-form.js"></script>
<script src="{{ asset('frontend') }}/js/waypoints.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
<script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('frontend') }}/js/scrollIt.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.scrollUp.min.js"></script>
<script src="{{ asset('frontend') }}/js/wow.min.js"></script>
<script src="{{ asset('frontend') }}/js/nice-select.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.slicknav.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontend') }}/js/plugins.js"></script>
<script src="{{ asset('frontend') }}/js/gijgo.min.js"></script>

<!--contact js-->
<script src="{{ asset('frontend') }}/js/contact.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.form.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.validate.min.js"></script>
<script src="{{ asset('frontend') }}/js/mail-script.js"></script>

<script src="{{ asset('frontend') }}/js/main.js"></script>

@yield('script')

</body>

</html>