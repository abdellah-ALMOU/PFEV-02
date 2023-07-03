@extends('site');

@section('content')
<!-- header style two -->
<header class="rts-header-area header-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header--one-main">
                    <div class="row align-items-center header-top-one">
                        <div class="col-lg-3">
                            <a href="index.html" class="logo-area">
                                <img src="assets/images/logo/logo-01.png" alt="logo-area">
                            </a>
                        </div>
                        <div class="col-lg-9">
                            <div class="header-right-area">
                                <!-- single info wrapper -->
                                <div class="single-info-contact">
                                    <i class="fa-light fa-clock"></i>
                                    <div class="inner-content">
                                        <span>24/7 Service Alltime</span>
                                        <a href="#">
                                            <h6 class="title">Mon (to) Sun: 9:00-5:00</h6>
                                        </a>
                                    </div>
                                </div>
                                <!-- single info wrapper end -->
                                <!-- single info wrapper -->
                                <div class="single-info-contact map">
                                    <i class="fa-light fa-location-dot"></i>
                                    <div class="inner-content">
                                        <span>Company Location</span>
                                        <a href="https://www.google.com/maps" target="_blank">
                                            <h6 class="title">16 Berlin, Germany</h6>
                                        </a>
                                    </div>
                                </div>
                                <!-- single info wrapper end -->
                                <!-- button area start -->
                                <div class="btn-area-header">
                                    <a href="appoinment.html" class="rts-btn btn-primary with-arrow">Request Quote <i class="fa-regular fa-arrow-up-right"></i></a>
                                </div>
                                <!-- button area end -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-nav-area header--sticky">
                                <div class="logo-md-sm-device">
                                    <a href="#" class="logo">
                                        <img src="assets/images/logo/logo-01.png" alt="logo">
                                    </a>
                                </div>

                                <div class="header-nav main-nav-one">
                                    <nav>
                                        <ul>
                                            <li class="mega has-dropdown">
                                                <a class="nav-link" href="#">HOME</a>
                                                <ul class="submenu">
                                                    <div class="container flex-mega">
                                                        <li class="menu-item">
                                                            <a class="tag" href="#">Multipage</a>
                                                            <ul class="pages">
                                                                <li><a class="current" href="index.html">Handyman</a></li>
                                                                <li><a href="https://themewant.com/products/html/drill/plumber/">Plumber</a></li>
                                                                <li><a href="https://themewant.com/products/html/drill/cleaning/">Cleaning</a></li>
                                                                <li><a href="https://themewant.com/products/html/drill/air-condition/">Air Condition</a></li>
                                                                <li><a href="https://themewant.com/products/html/drill/electric//">Electric</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="tag" href="#">Onepage</a>
                                                            <ul class="pages">
                                                                <li><a href="onepage.html">Handyman Onepage</a></li>
                                                                <li><a href="https://themewant.com/products/html/drill/plumber/">Plumber Onepage</a></li>
                                                                <li><a href="https://themewant.com/products/html/drill/cleaning/">Cleaning Onepage</a></li>
                                                                <li><a href="https://themewant.com/products/html/drill/air-condition/">Air Condition Onepage</a></li>
                                                                <li><a href="https://themewant.com/products/html/drill/electric//">Electric Onepage</a></li>
                                                            </ul>
                                                        </li>
                                                    </div>
                                                </ul>
                                            </li>
                                            <li><a class="nav-link" href="aboutus.html">ABOUT</a></li>
                                            <li class="has-dropdown">
                                                <a class="nav-link" href="#">SERVICES</a>
                                                <ul class="submenu">
                                                    <li><a href="service.html">Service</a></li>
                                                    <li><a href="service-details.html">Service Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a class="nav-link" href="#">BLOG</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a class="nav-link" href="#">PAGES</a>
                                                <ul class="submenu">
                                                    <li><a href="appoinment.html">Appoinment</a></li>
                                                    <li><a href="project.html">Project</a></li>
                                                    <li class="sub-dropdown">
                                                        <a href="javascript:void(0);">Project Details</a>
                                                        <ul class="submenu third-lvl base">
                                                            <li><a class="mobile-menu-link" href="project-details.html">Project Details</a></li>
                                                            <li><a class="mobile-menu-link" href="project-details-gallery.html">Details Gallery</a></li>
                                                            <li><a class="mobile-menu-link" href="project-details-vedio.html">Details Vedio</a></li>
                                                            <li><a class="mobile-menu-link" href="project-details-carousel.html">Details Carousel</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="nav-link" href="contact.html">CONTACT</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="actions-area">
                                    <div class="search-btn" id="search">

                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.75 14.7188L11.5625 10.5312C12.4688 9.4375 12.9688 8.03125 12.9688 6.5C12.9688 2.9375 10.0312 0 6.46875 0C2.875 0 0 2.9375 0 6.5C0 10.0938 2.90625 13 6.46875 13C7.96875 13 9.375 12.5 10.5 11.5938L14.6875 15.7812C14.8438 15.9375 15.0312 16 15.25 16C15.4375 16 15.625 15.9375 15.75 15.7812C16.0625 15.5 16.0625 15.0312 15.75 14.7188ZM1.5 6.5C1.5 3.75 3.71875 1.5 6.5 1.5C9.25 1.5 11.5 3.75 11.5 6.5C11.5 9.28125 9.25 11.5 6.5 11.5C3.71875 11.5 1.5 9.28125 1.5 6.5Z" fill="#1F1F25" />
                                        </svg>

                                    </div>
                                    <div class="menu-btn" id="menu-btn">

                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="14" width="20" height="2" fill="#1F1F25" />
                                            <rect y="7" width="20" height="2" fill="#1F1F25" />
                                            <rect width="20" height="2" fill="#1F1F25" />
                                        </svg>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header style two End -->
@endsection