@extends('layouts.website')

@section('content')
    <!-- banner start -->
    <div class="position-relative">
        <div class="slider slider-for banner-slider-main">
            <div class="item" style="background: url(assets/img/home-3/banner1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="banner-inner style-white">
                                <h1 id="opening" style="color: black;" class="b-animate-2 title">
                                    Building Zambia's Future with Global Insight and Local Action.
                                </h1>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background: url(assets/img/home-3/banner2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-inner style-white">

                                <h1 class="b-animate-2 title">
                                    Connecting Commerce and Community.
                                </h1>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background: url(assets/img/home-3/banner3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-inner style-white">

                                <h1 class="b-animate-2 title">
                                    A Tradition of Excellence!

                                </h1>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container position-relative">
            <div class="slider slider-nav banner-slider-main-nav">
                <div class="item">
                    <img src="{{ asset('assets/img/home-3/banner1.jpg') }}" alt="img"/>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/home-3/banner2.jpg') }}" alt="img"/>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/home-3/banner3.jpg') }}" alt="img"/>
                </div>

            </div>
        </div>
    </div>
    <!-- banner end -->

    <div class="home" style="margin-top: 30px">
        <div style="margin-top:-25px;" class="container">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="media single-intro-inner">
                        <div class="media-body">
                            <img src="{{ asset('gear.png') }}" style="width: 30%; text-align: center">
                            <h5 class="text-black">Efficiency</h5>
                            <p style="font-size: 14px" class="text-black text-small mb-0">
                                Prompt delivery, the Dana way. We ensure your operations stay on track with our reliable
                                services
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="media single-intro-inner single-intro-inner-active">
                        <div class="media-body">
                            <img src="{{ asset('expertise.png') }}" style="width: 30%; text-align: center">
                            <h5 class="text-black">Global Expertise</h5>
                            <p style="font-size: 14px" class="text-black text-small mb-0">
                                Spanning continents, delivering local value. Dana Holdings bridges international
                                expertise
                                with Zambian vitality.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="media single-intro-inner">
                        <div class="media-body">
                            <img src="{{ asset('partners.png') }}" style="width: 30%; text-align: center">
                            <h5 class="text-black">Supportive Partnership</h5>
                            <p style="font-size: 14px" class="text-black text-small mb-0">
                                Always connected, always committed. With Dana Holdings, support is constant, ensuring
                                your
                                business thrives.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area start -->
    <div class="about-area-2 half-bg-right pd-top-120 pd-bottom-120" style="background: url(assets/img/home-3/13.png)">
        <div class="container">
            <div class="about-area-inner">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-thumb-wrap mb-lg-0 mb-4">
                            <img class="hover-bg feature-logo"
                                 src="{{ asset('/assets/img/home-3/DANA GROUP LOGO-03.jpg') }}"
                                 alt="img"/>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="{{-- about-inner-wrap ms-0 --}} {{-- ps-lg-4 --}} mt-0">
                            <div class="section-title mb-0">
                                <h6 class="sub-title text-base mb-3">
                                    <svg class="me-2" width="40" height="12" viewBox="0 0 40 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <rect x="20" width="20" height="2" fill="#1869FE"/>
                                        <rect y="10" width="40" height="2" fill="#1869FE"/>
                                    </svg>
                                    About Company
                                </h6>
                                <h2 class="title mb-2">
                                    Building Zambia's Future with Global Insight and Local Action
                                </h2>
                                <p class="mb-4 text-smal">
                                    Dana Holdings synergizes the operations of its brands, each a leader in its
                                    field—Dana
                                    Services, Dana Oil, Danatrac Limited, and Terotech Construction. We are a beacon of
                                    excellence, with a strategic focus on sectors that include mining support,
                                    agriculture,
                                    energy, and construction, ensuring we play a pivotal role in Zambia's growth.
                                </p>
                                <div class="row">
                                    <!-- Item 1: Innovation -->
                                    <div class="col-md-6">
                                        <div class="media border-bottom-1 pb-3 mb-3">
                                            <div class="media-body">
                                                <h5>Innovation</h5>
                                                <p class="mb-0">Fostering a culture of creativity and continuous
                                                    improvement across our brands.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 2: Sustainability -->
                                    <div class="col-md-6">
                                        <div class="media border-bottom-1 pb-3 mb-3">
                                            <div class="media-body">
                                                <h5>Sustainability</h5>
                                                <p class="mb-0">Committing to responsible practices that ensure the
                                                    well-being of our environment and communities.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 3: Excellence -->
                                    <div class="col-md-6">
                                        <div class="media border-bottom-1 pb-3 mb-3">
                                            <div class="media-body">
                                                <h5>Excellence</h5>
                                                <p class="mb-0">Delivering the highest standard in all our endeavors and
                                                    services.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 4: Integrity -->
                                    <div class="col-md-6">
                                        <div class="media border-bottom-1 pb-3 mb-3">
                                            <div class="media-body">
                                                <h5>Integrity</h5>
                                                <p class="mb-0">Maintaining transparency and ethical conduct in all our
                                                    business dealings.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item 5: Collaboration -->
                                    <div class="col-md-6">
                                        <div class="media border-bottom-1 pb-3 mb-3">
                                            <div class="media-body">
                                                <h5>Collaboration</h5>
                                                <p class="mb-0">Building synergistic partnerships that drive collective
                                                    success.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional items can be added here, following the same pattern -->
                                </div>
                                <!-- end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- Philosophy area start -->
    <div class="about-area-2 bg-black pd-top-120 mb-5">
        <div class="container">
            <div class="about-area-inner">
                <div class="row">
                    <div class="col-lg-5 order-lg-2">
                        <div class="about-thumb-wrap mb-lg-0 mb-5">
                            <img class="hover-bg margin-bottom--150" src="assets/img/home-3/Philosophy.jpg"
                                 alt="img"/>
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-1 align-self-center">
                        <div class="about-inner-wrap ms-0 ps-lg-4 pb-5 mb-4">
                            <div class="section-title style-white mb-0">
                                <h6 style="color:#d9b919" class="sub-title text-base mb-3">
                                    Dana Group Business Philosophy
                                </h6>
                                <p class="text-white mb-4 pb-2">
                                    Our guiding principle, 'Innovation through Diversity,' encapsulates our approach to
                                    business. It's this diversity that drives us, harnessing the unique strengths of our
                                    brands to foster resilience, adaptability, and market leadership.
                                </p>
                                <div class="media border-bottom-1-dark pb-3 mb-3">
                                    {{-- <div class="media-left me-3">
                                        <img src="assets/img/home-3/19.png" alt="img" />
                                    </div> --}}
                                    <div class="media-body">
                                        <a href="{{ url('about_dana_services') }}" target="_blank">
                                            <h6 style="color: #cb0308" class="text">Dana Services</h6>
                                        </a>
                                        <p class="mb-0 text-white l">
                                            Leading with excellence in industrial and agricultural support services.
                                        </p>
                                    </div>
                                </div>
                                <div class="media border-bottom-1-dark pb-3 mb-3">
                                    {{-- <div class="media-left me-3">
                                        <img src="assets/img/home-3/20.png" alt="img" />
                                    </div> --}}
                                    <div class="media-body">
                                        <a href="{{ url('about_dana_oil') }}" target="_blank"><h6 style="color: #28b3ea"
                                                                                                  class="text">
                                                Dana Oil</h6></a>
                                        <p class="mb-0 text-white">
                                            Energizing the nation as the premier distributor of energy solutions and
                                            lubricants.
                                        </p>
                                    </div>
                                </div>

                                <div class="media border-bottom-1-dark pb-3 mb-3">
                                    {{-- <div class="media-left me-3">
                                        <img src="assets/img/home-3/20.png" alt="img" />
                                    </div> --}}
                                    <div class="media-body">
                                        <a href="{{ url('about_dana_trac') }}" target="_blank">
                                            <h6 style="color: #87cc19" class="text">Danatrac Limited</h6>
                                        </a>
                                        <p class="mb-0 text-white">
                                            Advancing agribusiness with state-of-the-art agricultural machinery and
                                            implements.
                                        </p>
                                    </div>
                                </div>

                                <div class="media">
                                    {{-- <div class="media-left me-3">
                                        <img src="assets/img/home-3/19.png" alt="img" />
                                    </div> --}}
                                    <div class="media-body">
                                        <a href="{{ url('about_terotech') }}" target="_blank">
                                            <h6 style="color: #ff8a00" class="text">Terotech Construction</h6>
                                        </a>
                                        <p class="mb-0 text-white">
                                            Building a better tomorrow with cutting-edge construction and waste
                                            management
                                            services.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->


    <!-- work-process area start -->
    <div class="work-process-area pd-top-120 pd-bottom-120 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h6 class="sub-title text-black mb-3">Working Process</h6>
                        <h2 class="title">How Our Brands Work Together</h2>
                    </div>
                </div>
            </div>

            <div class="bg work-process-bg bg-cover" style="background-image: url('path_to_your_background_image')">
                <div class="row">
                    <!-- Step 1: Identification of Needs -->
                    <div class="col-lg-3 col-md-6">
                        <div class="{{-- single-work-process-inner --}} text-center">
                            <div class="thumb">
                                {{-- <div class="icon">
                                    <img src="path_to_identification_image" alt="identification" />
                                </div> --}}
                            </div>
                            <div class="details">
                                <h6>Identification of Needs</h6>
                                <p>Dana Holdings begins with understanding the unique needs across industries.</p>
                                <div class="count"
                                     style="width: 60px; height: 60px; border-radius: 50%; line-height: 60px; font-size: 20px; display: inline-block; background-color: #cb0308; color: white;">
                                    01
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Resource and Knowledge Sharing -->
                    <div class="col-lg-3 col-md-6">
                        <div class="{{-- single-work-process-inner --}} text-center">
                            <div class="thumb">
                                {{--  <div class="icon">
                                    <img src="path_to_sharing_image" alt="sharing" />
                                </div> --}}
                            </div>
                            <div class="details">
                                <h6>Resource Sharing</h6>
                                <p>Our brands leverage Dana Holdings' collective resources for optimal solutions.</p>
                                <div class="count"
                                     style="width: 60px; height: 60px; border-radius: 50%; line-height: 60px; font-size: 20px; display: inline-block; background-color: #28b3ea; color: white;">
                                    02
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Integrated Solutions Development -->
                    <div class="col-lg-3 col-md-6">
                        <div class="{{-- single-work-process-inner --}} text-center">
                            <div class="thumb">
                                {{--  <div class="icon">
                                    <img src="path_to_development_image" alt="development" />
                                </div> --}}
                            </div>
                            <div class="details">
                                <h6>Integrated Solutions</h6>
                                <p>We craft integrated offerings, combining the strengths of each Dana Holdings
                                    brand.</p>
                                <div class="count"
                                     style="width: 60px; height: 60px; border-radius: 50%; line-height: 60px; font-size: 20px; display: inline-block; background-color: #87cc19; color: white;">
                                    03
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4: Execution with Excellence -->
                    <div class="col-lg-3 col-md-6">
                        <div class="{{-- single-work-process-inner --}} text-center">
                            <div class="thumb">
                                {{--  <div class="icon">
                                    <img src="path_to_execution_image" alt="execution" />
                                </div> --}}
                            </div>
                            <div class="details">
                                <h6>Execution Excellence</h6>
                                <p>Seamless, timely execution ensures Dana Holdings' brands deliver on our promise.</p>
                                <div class="count"
                                     style="width: 60px; height: 60px; border-radius: 50%; line-height: 60px; font-size: 20px; display: inline-block; background-color: #ff8a00; color: white;">
                                    04
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work-process area end -->


    <div class="contact-area" style="background-image: url(assets/img/home-3/40.png)">
        <!--fact-area start-->
        <div class="container">

            <div class="contact-wrap pd-top-100">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title pe-lg-5 me-lg-5">
                            <h6 style="color: #000000;" class="sub-title text-black mb-3">
                                {{-- <svg class="me-2" width="40" height="12" viewBox="0 0 40 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" width="20" height="2" fill="#1869FE" />
                                    <rect y="10" width="40" height="2" fill="#1869FE" />
                                </svg> --}}
                                Contact Dana Group
                            </h6>
                            <h2 class="title mb-4">Get in touch!</h2>
                            <p>
                                Discover the depth and breadth of Dana Holdings' impact on Zambia’s economic landscape.
                                Engage with us to learn how our international partnerships and local operations can
                                support
                                your goals and contribute to sustainable economic progress.
                            </p>
                        </div>
                        <div class="bg-black p-4">
                            <div class="row">
                                <div class="col-md-6 mb-md-0 mb-4 align-self-center">
                                    <p class="text-white">Telephone</p>
                                    <h6 class="text-white mb-0">+260 1 234779/238358</h6>
                                </div>

                                <div class="col-md-6 align-self-center text-md-end">
                                    <p class="text-white">Email Address</p>
                                    <h6 class="text-white mb-0">hello@danagroup.com</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-xl-5">
                        <div class="quote-wrap ms-xl-5" style="background: #d9b919">
                            <h4 class="mb-4">Contact Us</h4>
                            <div class="single-input-inner style-bg border-radius-5">
                                <input type="text" placeholder="Your Name"/>
                            </div>
                            <div class="single-input-inner style-bg border-radius-5">
                                <input type="text" placeholder="Your Name"/>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-select-inner style-bg border-radius-5">
                                        <select class="single-select">
                                            <option>Choose Brand</option>
                                            <option value="1">Dana Services</option>
                                            <option value="2">Dana oil</option>
                                            <option value="2">Danatrac Limited</option>
                                            <option value="2">Terotech Construction</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <a style="background-color:black;color:white;" class="btn" href="#">Send Message <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--fact-area end-->
    </div>
@endsection
