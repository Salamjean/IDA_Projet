<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>IDA</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('assetsHome/assets/images/ada/Logo-Footer_ida.png.webp') }}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('assetsHome/assets/css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ asset('assetsHome/assets/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('assetsHome/assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('assetsHome/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assetsHome/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assetsHome/assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assetsHome/assets/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('assetsHome/assets/css/rtl.css') }}" rel="stylesheet">
<link href="{{ asset('assetsHome/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assetsHome/assets/css/responsive.css') }}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body class="boxed_wrapper ltr">

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>


    <!-- page-direction -->
    <div class="page_direction">
        <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
        <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
    </div>
    <!-- page-direction end -->

    {{-- topbar section --}}
        @include('layouts.topbar')
    {{-- topbar section end --}}

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{ asset('assetsHome/assets/images/ada/Logo_ida_nuovo-header-ada-small.png') }}" alt="Logo IDA" title="Logo IDA"></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li><b>Senegal:</b> Complexe Sicap-Point E Bat. B - 3e Et. 12500 - Dakar | Sénégal</li>
                    <li><a href="tel:+221338254422"> +221 33 825 44 22</a></li>
                    <li><b>Italy:</b> Temporary Branch Viale Indro Montanelli, 175 00168 - Roma | RM</li>
                    <li><a href="mailto:info@idainternational.org"> info@idainternational.org</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="https://twitter.com/initiativeda/" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="https://www.facebook.com/ONG-IDA-Initiative-for-the-Development-of-Africa-102588278967248/" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="https://www.linkedin.com/company/ida-initiative-for-the-development-of-africa" target="_blank"><span class="fab fa-linkedin"></span></a></li>
                    <li><a href="https://www.instagram.com/idainternational/" target="_blank"><span class="fab fa-instagram" ></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->


    <!--Page Title-->


    <!-- news-section -->
        @yield('content')
    <!-- news-section end -->


    <!-- main-footer -->
    <footer class="main-footer alternet-5">
        <div class="footer-upper">
            <div class="auto-container">
                <div class="upper-inner clearfix">
                    <div class="text pull-left">
                        <h2>Do you want to learn about us?</h2>
                        <p>Consectetur adipisicing elit sed eiusmod tempor incididunt labore dolore magna aliqua.</p>
                    </div>
                    <div class="btn-box pull-right">
                        <a href="index-5.html" class="theme-btn style-one">Get In Touch Today</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="{{ asset('assetsHome/assets/images/ada/Logo_ida_nuovo-header-ada.png') }}" alt=""></a></figure>
                                <div class="text">
                                    <p>Tempor incididunt ut labore eut dolore veniam quis nostrud exercitation ullamc consequat. Duis aute irure.</p>
                                </div>
                                <ul class="info-list clearfix">
                                    <li><i class="fas fa-map-marker-alt"></i>838 Andy Street, Madison, NJ 08003</li>
                                    <li><i class="fas fa-envelope"></i>Email <a href="mailto:support@my-domain.com">support@my-domain.com</a></li>
                                    <li><i class="fas fa-headphones"></i>Support <a href="tel:01005200369">0100 5200 369</a></li>
                                </ul>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h4>Useful Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="index.html">About Us</a></li>
                                        <li><a href="index.html">What We Offers</a></li>
                                        <li><a href="index.html">Testimonials</a></li>
                                        <li><a href="index.html">Our Projectss</a></li>
                                        <li><a href="index.html">Latest News</a></li>
                                        <li><a href="index.html">Privacy Policy</a></li>
                                        <li><a href="index.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>What We Do</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="index.html">Financial Advice</a></li>
                                        <li><a href="index.html">Business Planning</a></li>
                                        <li><a href="index.html">Startup Help</a></li>
                                        <li><a href="index.html">Investment Strategy</a></li>
                                        <li><a href="index.html">Management Services</a></li>
                                        <li><a href="index.html">Market Research</a></li>
                                        <li><a href="index.html">SEO Optimization</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-title">
                                    <h4>Newslette</h4>
                                </div>
                                <div class="widget-content">
                                    <div class="text">
                                        <p>Get in your inbox the latest News</p>
                                    </div>
                                    <form action="contact.html" method="post" class="newsletter-form">
                                        <div class="form-group">
                                            <i class="far fa-user"></i>
                                            <input type="text" name="name" placeholder="Your Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <i class="far fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Email address" required="">
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit">subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright"><p>&copy; 2020 <a href="index.html">FIONCA</a> - Business & Consulting. All rights reserved.</p></div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>


    <!-- sidebar cart item -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="upper-box">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('assetsHome/assets/images/sidebar-logo.png') }}" alt="" /></a>
                            </div>
                            <div class="text">
                                <p>Exercitation ullamco laboris nis aliquip sed conseqrure dolorn repreh deris ptate velit ecepteur duis.</p>
                            </div>
                        </div>
                        <div class="side-menu-box">
                            <div class="side-menu">
                                <nav class="menu-box">
                                    <div class="menu-outer">
                                        
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="info-box">
                            <h3>Get in touch</h3>
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>838 Andy Street, Madison, NJ</li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:support@my-domain.com">support@my-domain.com</a></li>
                                <li><i class="fas fa-headphones-alt"></i><a href="tel:101005200369">+1  0100 5200 369</a></li>
                                <li><i class="far fa-clock"></i>Monday to Friday: 9am - 6pm</li>
                            </ul>
                            <form action="contact.html" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email address" required="">
                                    <button type="submit" class="theme-btn style-one">subscribe now</button>
                                </div>
                            </form>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->


<!-- jequery plugins -->
<script src="{{ asset('assetsHome/assets/js/jquery.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/owl.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/wow.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/validation.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/appear.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/scrollbar.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/nav-tool.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/circle-progress.js') }}"></script>
<script src="{{ asset('assetsHome/assets/js/jquery.nice-select.min.js') }}"></script>

<!-- main-js -->
<script src="{{ asset('assetsHome/assets/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->
</html>
