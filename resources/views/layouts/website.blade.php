<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dana Group</title>
    <link rel="icon" href={{-- "assets/img/favicon.png --}}" sizes=" 20x20
    " type="image/png" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>

    @stack('styles')

    <style>
        /* Default styles for all devices */

        /* Tablet and above */
        @media (max-width: 768px) {
            /* Styles for tablets and larger devices */
            #logoimage {
                width: 60%;
            }
        }

        /* Laptop and above */
        @media (min-width: 1024px) {
            /* Styles for laptops and larger devices */
            #logoimage {
                width: 75%;
            }

            .item {
                height: 90vh !important;
            }

            .phone-number {
                font-size: 9pt !important;
            }
        }

        /* Large screens and above */
        @media (min-width: 1200px) {
            /* Styles for larger screens, such as desktops */
            #logoimage {
                width: 75%;
            }

            .item {
                height: 100vh !important;
            }

            .feature-logo {
                width: 75% !important;
            }
        }

        .parallax {
            /* The image used */
            background-image: url("parallax1.jpg");

            /* Set a specific height */
            min-height: 25vh;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax2 {
            /* The image used */
            background-image: url("parallax2.jpg");

            /* Set a specific height */
            min-height: 25vh;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax3 {
            /* The image used */
            background-image: url("assetparallax.jpg");

            /* Set a specific height */
            min-height: 25vh;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax4 {
            /* The image used */
            background-image: url("promise.jpg");

            /* Set a specific height */
            min-height: 25vh;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }


    </style>

</head>

<body>
<!-- preloader area start -->
<!-- <div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div> -->
<!-- preloader area end -->

<!-- search popup start-->
<div class="body-overlay" id="body-overlay"></div>
<div class="td-search-popup" id="td-search-popup">
    <form action="{{ url('/') }}" class="search-form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search....."/>
        </div>
        <button type="submit" class="submit-btn">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>
<!-- search popup end-->

<!-- navbar start -->
<header class="navbar-area navbar-area-3 d-lg-none d-block">
    <nav class="navbar navbar-expand-lg px-4">
        <div class="container nav-container p-0 pt-2 pb-2">
            <a class="main-logo" href="{{ url('/') }}"><img src="assets/img/home-3/2.png" id="logoimage" alt="img"/></a>
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#logisk_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="logisk_main_menu">

                <ul class="navbar-nav menu-open text-lg-end">
                    <li class="menu-item-has-children">
                        <a href="{{ url('/') }}">About Dana Group</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/about_dana') }}">About Us</a></li>
                            <li><a href="{{ url('#') }}">Executive Team</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Dana Services</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/about_dana_services') }}">About Dana Services</a></li>
                            <li><a href="{{ url('#') }}">Products Supply</a></li>

                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">Dana Oil</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/about_dana_oil') }}">About Dana Oil</a></li>
                            <li><a href="{{ url('about_dana_oil_products') }}">Products</a></li>
                            <li><a href="{{ url('#') }}">Purchase / Order Products</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">Danatrac Limited</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/about_dana_trac') }}">About Danatrac</a></li>
                            <li><a href="{{ url('about_dana_trac_products') }}">Products Portfolio</a></li>
                            <li><a href="{{ url('#') }}">Purchase / Order Products</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">Terotech Construction</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/about_terotech') }}">About Terotech Construction</a></li>
                            <li><a href="{{ url('/about_terotech_key_accounts') }}">Key Accounts</a></li>
                            <li><a href="{{ url('#') }}">Request A Service</a></li>
                        </ul>
                    </li>


                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>


            </div>
        </div>
    </nav>
</header>
<!-- navbar end -->

<!-- navbar start -->
<header class="navbar-area navbar-area-3 d-lg-block d-none">
    <div class="row g-0">
        <div class="col-xl-2 col-lg-3">
            <div style="background-color: black;" class="logo left-logo text-center align-self-center">
                <a class="main-logo" href="{{ url('/') }}"><img src="assets/img/home-3/2.png" style="width: 75%"
                                                                alt="img"/></a>
            </div>
        </div>
        <div class="col-xl-10 col-lg-9">
            <div style="background-color: black;" class="navbar-top mb-0 px-4 d-lg-block d-none">
                <div class="container p-lg-0">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 text-md-start text-center">
                            <ul class="topbar-left m-0">
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    hello@danagroup.com
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>Mon - Fri 09: AM - 05: PM
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <ul class="topbar-right social-area text-md-end text-center">
                                <li class="d-xl-inline-block d-none">
                                    <svg width="12" height="17" viewBox="0 0 12 17" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 0C7.0625 0 8.0625 0.28125 9 0.8125C9.90625 1.375 10.625 2.09375 11.1875 3C11.7188 3.9375 12 4.9375 12 6C12 6.625 11.9062 7.15625 11.7812 7.625C11.625 8.125 11.3438 8.71875 10.9375 9.4375C10.625 9.9375 10.0312 10.9375 9.125 12.375L7.28125 15.2812C7.09375 15.5938 6.8125 15.8125 6.5 15.9375C6.15625 16.0625 5.8125 16.0625 5.5 15.9375C5.15625 15.8125 4.90625 15.5938 4.71875 15.2812L2.875 12.375C1.9375 10.9375 1.34375 9.96875 1.0625 9.46875C0.625 8.71875 0.34375 8.125 0.21875 7.625C0.0625 7.15625 0 6.625 0 6C0 4.9375 0.25 3.9375 0.8125 3C1.34375 2.09375 2.0625 1.375 3 0.8125C3.90625 0.28125 4.90625 0 6 0ZM6 14.5L7.96875 11.375C8.78125 10.0625 9.34375 9.15625 9.625 8.71875C9.96875 8.09375 10.1875 7.625 10.3125 7.25C10.4375 6.90625 10.5 6.5 10.5 6C10.5 5.1875 10.2812 4.4375 9.875 3.75C9.46875 3.0625 8.9375 2.53125 8.25 2.125C7.5625 1.71875 6.8125 1.5 6 1.5C5.1875 1.5 4.4375 1.71875 3.75 2.125C3.0625 2.53125 2.5 3.0625 2.09375 3.75C1.6875 4.4375 1.5 5.1875 1.5 6C1.5 6.5 1.53125 6.90625 1.65625 7.28125C1.78125 7.65625 2.03125 8.125 2.40625 8.75C2.65625 9.1875 3.1875 10.0938 4.03125 11.4062C4.8125 12.6562 5.46875 13.6875 6 14.5ZM3.5 6C3.5 6.6875 3.71875 7.28125 4.21875 7.78125C4.71875 8.28125 5.3125 8.5 6 8.5C6.6875 8.5 7.25 8.28125 7.75 7.78125C8.25 7.28125 8.5 6.6875 8.5 6C8.5 5.3125 8.25 4.75 7.75 4.25C7.25 3.75 6.6875 3.5 6 3.5C5.3125 3.5 4.71875 3.75 4.21875 4.25C3.71875 4.75 3.5 5.3125 3.5 6Z"
                                            fill="#1869fe"/>
                                    </svg>
                                    <span class="ms-1">Plot 117107 Chandwe Musonda Road,
                                            light industrial Area
                                        </span>
                                    <span class="ps-3">|</span>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav style="background-color: black;" class="navbar navbar-expand-lg px-4">
                <div class="container nav-container p-0 pt-2 pb-2">
                    <div class="responsive-mobile-menu">
                        <button class="menu toggle-btn d-block d-lg-none" data-target="#logisk_main_menu"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-left"></span>
                            <span class="icon-right"></span>
                        </button>
                    </div>
                    <div class="nav-right-part nav-right-part-mobile">
                        <a class="search-bar-btn" href="#">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.9062 14.6562C15.9688 14.7188 16 14.8125 16 14.9062C16 15.0312 15.9688 15.125 15.9062 15.1875L15.1875 15.875C15.0938 15.9688 15 16 14.9062 16C14.7812 16 14.7188 15.9688 14.6562 15.875L10.8438 12.0938C10.7812 12.0312 10.75 11.9375 10.75 11.8438V11.4062C10.1562 11.9062 9.5 12.3125 8.78125 12.5938C8.03125 12.875 7.28125 13 6.5 13C5.3125 13 4.21875 12.7188 3.21875 12.125C2.21875 11.5625 1.4375 10.7812 0.875 9.78125C0.28125 8.78125 0 7.6875 0 6.5C0 5.3125 0.28125 4.25 0.875 3.25C1.4375 2.25 2.21875 1.46875 3.21875 0.875C4.21875 0.3125 5.3125 0 6.5 0C7.6875 0 8.75 0.3125 9.75 0.875C10.75 1.46875 11.5312 2.25 12.125 3.25C12.6875 4.25 13 5.3125 13 6.5C13 7.3125 12.8438 8.0625 12.5625 8.78125C12.2812 9.53125 11.9062 10.1875 11.4062 10.75H11.8438C11.9375 10.75 12.0312 10.7812 12.0938 10.8438L15.9062 14.6562ZM6.5 11.5C7.375 11.5 8.21875 11.2812 9 10.8438C9.75 10.4062 10.375 9.78125 10.8125 9C11.25 8.25 11.5 7.40625 11.5 6.5C11.5 5.625 11.25 4.78125 10.8125 4C10.375 3.25 9.75 2.625 9 2.1875C8.21875 1.75 7.375 1.5 6.5 1.5C5.59375 1.5 4.75 1.75 4 2.1875C3.21875 2.625 2.59375 3.25 2.15625 4C1.71875 4.78125 1.5 5.625 1.5 6.5C1.5 7.40625 1.71875 8.25 2.15625 9C2.59375 9.78125 3.21875 10.4062 4 10.8438C4.75 11.2812 5.59375 11.5 6.5 11.5Z"
                                    fill="#080C24"/>
                            </svg>
                        </a>
                        <a class="btn btn-base" href="contact.html"><span> </span> Get A Quote
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="logisk_main_menu">
                        <ul class="navbar-nav menu-open">
                            {{--   <li><a href="{{ url('/about_dana') }}">About Dana Group</a></li> --}}
                            <li class="menu-item-has-children">
                                <a href="{{ url('/') }}">About Dana Group</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/about_dana') }}">About Us</a></li>
                                    <li><a href="{{ url('#') }}">Executive Team</a></li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Dana Services</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/about_dana_services') }}">About Dana Services</a></li>
                                    <li><a href="{{ url('#') }}">Products Supply</a></li>

                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Dana Oil</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/about_dana_oil') }}">About Dana Oil</a></li>
                                    <li><a href="{{ url('about_dana_oil_products') }}">Products</a></li>
                                    <li><a href="{{ url('#') }}">Purchase / Order Products</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Danatrac Limited</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/about_dana_trac') }}">About Danatrac</a></li>
                                    <li><a href="{{ url('about_dana_trac_products') }}">Products Portfolio</a></li>
                                    <li><a href="{{ url('#') }}">Purchase / Order Products</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Terotech Construction</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/about_terotech') }}">About Terotech Construction</a></li>
                                    <li><a href="{{ url('/about_terotech_key_accounts') }}">Key Accounts</a></li>
                                    <li><a href="{{ url('#') }}">Request A Service</a></li>
                                </ul>
                            </li>


                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="nav-right-part nav-right-part-desktop">
                        <a class="search-bar-btn" href="#">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.9062 14.6562C15.9688 14.7188 16 14.8125 16 14.9062C16 15.0312 15.9688 15.125 15.9062 15.1875L15.1875 15.875C15.0938 15.9688 15 16 14.9062 16C14.7812 16 14.7188 15.9688 14.6562 15.875L10.8438 12.0938C10.7812 12.0312 10.75 11.9375 10.75 11.8438V11.4062C10.1562 11.9062 9.5 12.3125 8.78125 12.5938C8.03125 12.875 7.28125 13 6.5 13C5.3125 13 4.21875 12.7188 3.21875 12.125C2.21875 11.5625 1.4375 10.7812 0.875 9.78125C0.28125 8.78125 0 7.6875 0 6.5C0 5.3125 0.28125 4.25 0.875 3.25C1.4375 2.25 2.21875 1.46875 3.21875 0.875C4.21875 0.3125 5.3125 0 6.5 0C7.6875 0 8.75 0.3125 9.75 0.875C10.75 1.46875 11.5312 2.25 12.125 3.25C12.6875 4.25 13 5.3125 13 6.5C13 7.3125 12.8438 8.0625 12.5625 8.78125C12.2812 9.53125 11.9062 10.1875 11.4062 10.75H11.8438C11.9375 10.75 12.0312 10.7812 12.0938 10.8438L15.9062 14.6562ZM6.5 11.5C7.375 11.5 8.21875 11.2812 9 10.8438C9.75 10.4062 10.375 9.78125 10.8125 9C11.25 8.25 11.5 7.40625 11.5 6.5C11.5 5.625 11.25 4.78125 10.8125 4C10.375 3.25 9.75 2.625 9 2.1875C8.21875 1.75 7.375 1.5 6.5 1.5C5.59375 1.5 4.75 1.75 4 2.1875C3.21875 2.625 2.59375 3.25 2.15625 4C1.71875 4.78125 1.5 5.625 1.5 6.5C1.5 7.40625 1.71875 8.25 2.15625 9C2.59375 9.78125 3.21875 10.4062 4 10.8438C4.75 11.2812 5.59375 11.5 6.5 11.5Z"
                                    fill="#fff"/>
                            </svg>
                        </a>
                        <span class="pe-4 ps-4 d-xl-inline-block d-none">|</span>
                        <div class="media d-xl-inline-flex d-none">
                            <div class="media-left me-2">
                                <img src="assets/img/p-icon.png" alt="img"/>
                            </div>
                            <div style="margin-top:10px;" class="media-body">

                                <span class="phone-number text-white">+260 1 234779/238358 </span>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- navbar end -->

@yield('content')

<!-- footer area start -->
<footer class="footer-area style-2">
    <div class="footer-top" style="background-image: url(assets/img/fact/bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="footer-top-subscribe pt-xl-5 pt-4 pb-xl-5 pb-4">
                        <div class="media-left border-0 p-0 m-0">
                            <h4 class="text-white">
                                Building Zambia's Future with Global Insight and Local Action
                            </h4>

                        </div>
                        <div class="media-body widget widget_subscribe mb-0 text-lg-end mt-lg-0 mt-4">
                            <a style="background-color:#d9b919" class="btn btn-default" href="#">learn more <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="widget widget_about pe-xl-5">
                    <h4 class="widget-title">
                        <img src="assets/img/home-3/2.png" alt="img"/>
                    </h4>
                    <div class="details">
                        <p>
                            At Dana Holdings, we are committed to driving forward the engines of industry with
                            sustainable, innovative solutions and services. Our mission is to deliver excellence and
                            unparalleled value to our customers, empowering the communities we serve, and enhancing
                            our nation's economic landscape.
                        </p>
                        <ul class="social-media style-bg-light">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">Our Brands</h4>
                    <ul>
                        <li><a href="{{ url('#') }}">Dana Services</a></li>
                        <li><a href="{{ url('#') }}">Dana Oil</a></li>
                        <li><a href="{{ url('#') }}">Danatrac Limited</a></li>
                        <li><a href="{{ url('#') }}">Terotech Construction</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">Our Values</h4>
                    <ul>
                        <li><a href="#">Innovatiom</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">Excellence</a></li>
                        <li><a href="#">Integrity</a></li>
                        <li><a href="#">Collaboration</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="widget widget_contact ps-xl-5">
                    <h4 class="widget-title">Subscribe</h4>
                    <div class="widget-subscribe mb-4">
                        <span><i class="fa fa-envelope"></i></span>
                        <input type="text" placeholder="Email Address"/>
                        <a href="#"><i class="fa fa-paper-plane"></i></a>
                    </div>
                    <div class="check-inner">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9" cy="9" r="8.5" stroke="#3D455E"/>
                            <path
                                d="M12.9141 6.20575C12.8599 6.15108 12.7954 6.10768 12.7243 6.07807C12.6532 6.04845 12.5769 6.0332 12.4999 6.0332C12.4229 6.0332 12.3467 6.04845 12.2756 6.07807C12.2045 6.10768 12.14 6.15108 12.0858 6.20575L7.73993 10.5574L5.9141 8.72575C5.85779 8.67136 5.79133 8.6286 5.71849 8.59989C5.64566 8.57119 5.56789 8.55712 5.48962 8.55847C5.41135 8.55982 5.33411 8.57658 5.26231 8.60779C5.19052 8.63899 5.12557 8.68403 5.07118 8.74034C5.01679 8.79664 4.97402 8.86311 4.94532 8.93594C4.91662 9.00877 4.90254 9.08654 4.9039 9.16481C4.90525 9.24309 4.92201 9.32033 4.95321 9.39212C4.98442 9.46392 5.02946 9.52886 5.08576 9.58325L7.32576 11.8233C7.37999 11.8779 7.44451 11.9213 7.51559 11.9509C7.58668 11.9806 7.66292 11.9958 7.73993 11.9958C7.81694 11.9958 7.89318 11.9806 7.96427 11.9509C8.03535 11.9213 8.09987 11.8779 8.1541 11.8233L12.9141 7.06325C12.9733 7.00863 13.0206 6.94233 13.0529 6.86854C13.0852 6.79475 13.1019 6.71506 13.1019 6.6345C13.1019 6.55394 13.0852 6.47426 13.0529 6.40047C13.0206 6.32667 12.9733 6.26038 12.9141 6.20575Z"
                                fill="#3D455E"/>
                        </svg>
                        <span class="ms-2">I Agree to all your terms and Policies</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- footer-bottom area start -->
<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-lg-start text-center">
                <div class="copyright-area">
                    <p>© Copyright 2023 All right reserved.</p>
                </div>
            </div>
            <div class="col-lg-6 text-lg-end text-center">
                <ul>
                    <li>
                        <a href="#">Terms & Condition</a>
                    </li>
                    <li><a href="#">Privacy & Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- footer-bottom area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

<!-- all plugins here -->
<!-- all plugins here -->
<script src="{{ asset('assets/js/vendor.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

@stack('scripts')

</body>

</html>
