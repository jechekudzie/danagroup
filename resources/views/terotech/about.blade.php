@extends('layouts.website')

@section('content')
    <div class="breadcrumb-area bg-overlay-2"
         style="background-image: url('{{ asset('assets/img/home-3/DANA GROUP BANNERS Corrections-01.jpg') }}');margin-top:130px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-inner">
                        <div class="section-title mb-0">
                            <h2 class="page-title">

                            </h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- service area start -->
    <div class="service-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                        {{-- <div class="thumb">
                            <img src="{{ asset('assets/img/home-3/DANA GROUP BANNERS-14.jpg') }}" alt="img" />

                        </div> --}}
                        <h2 style="color:#ff8a00">Terotech Construction Limited – Building the Foundations of
                            Growth</h2>
                        <br/>
                        <h4>Introduction to Terotech Construction Limited</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <p style="color:black; text-align: justify">
                                    Terotech Construction Limited stands as a testament to Dana Holdings’ commitment to
                                    excellence
                                    in the Zambian construction and waste management sectors. Established in 2002,
                                    Terotech has
                                    been
                                    at the forefront of infrastructure development, proudly contributing to Zambia’s
                                    economic
                                    resurgence. Our parent company, Dana Holdings, founded in 1997, has nurtured
                                    Terotech into a
                                    formidable force with a robust US$ 4 Million asset base.
                                </p>
                                <p style="color:black;">
                                    At Terotech, we employ a dynamic and proactive approach to construction. Our
                                    dedicated team
                                    of
                                    qualified engineers and marketing officers ensures that every project we undertake
                                    is
                                    viable,
                                    efficient, and completed to the highest standards. Our meticulous planning, critical
                                    path
                                    analysis, and rigorous monitoring ensure we deliver on our promises, on time and on
                                    budget.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <img style="min-height: 100%" src="{{ asset('stratbanner.jpg') }}">
                            </div>
                        </div>
                        <hr/>
                        <div class="parallax"></div>
                        <hr/>
                        <h4 style="color:black" class="subtitle">Commitment to Quality</h4>
                        <p style="color:black;">
                            We uphold the highest standards of quality assurance, aligning our practices with both local
                            and
                            international standards. Through continuous skills and management training, we ensure our
                            team
                            is well-versed in the latest construction techniques and environmental considerations.
                        </p>
                        <hr/>
                        <div class="parallax"></div>
                        <hr/>
                        <h4 style="color:black" class="subtitle">Sewerage and Solid Waste Management Excellence</h4>
                        <p style="color:black;">
                            Our expertise in sewerage and solid waste management is unrivaled in Zambia. With
                            state-of-the-art disposal tankers and a rapid response team, we've secured long-term
                            contracts
                            with prestigious clients, including the American and British embassies, and adhere strictly
                            to
                            the Environmental Council of Zambia’s regulations
                        </p>
                        <hr/>
                        <div class="parallax2"></div>
                        <hr/>
                        <h4 style="color:black" class="subtitle">Key Staff </h4>
                        <p style="color:black;">
                            Terotech’s success is driven by our skilled and experienced management team, who bring over
                            two
                            decades of industry expertise.
                        </p>
                        <hr/>
                        <div class="parallax3"></div>
                        <hr/>
                        <h4 style="color:black" class="subtitle">Asset Base and Financial Capacity</h4>
                        <p style="color:black;">
                            Our financial strength is a pillar of our operational capacity. With an annual turnover
                            exceeding K 30 Billion and a financial credit line of K 3 Billion, we have the means to
                            undertake and succeed in major projects across Zambia. Our asset base includes a fleet of
                            trucks, vacuum tankers, and state-of-the-art construction machinery, ready for mobilization.
                        </p>
                        <hr/>
                        <div class="parallax4"></div>
                        <hr/>
                        <h4 style="color:black" class="subtitle">Our Promise</h4>
                        <p style="color:black;">
                            As a key component of Dana Holdings, Terotech Construction Limited offers unmatched
                            construction
                            and project management services. Our vision is not only to build structures but also to
                            forge
                            lasting relationships with our clients and contribute significantly to Zambia’s development.
                        </p>


                    </div>
                </div>

                <div class="col-lg-4">
                    <div style="background-color:  light-grey" class="sidebar-area">

                        <div style="background: #ff8a00" class="widget widget_catagory">
                            <h4 style="color:white" class="widget-title">
                                OTHER BRANDS

                            </h4>
                            <ul class="catagory-items">
                                <li>
                                    <a style="color:white" href="{{ url('/about_dana_services') }}">Dana Services
                                        <span><i class="fa fa-arrow-right"></i></span></a>
                                </li>
                                <li>
                                    <a style="color:white" href="{{ url('/about_dana_oil') }}">Dana Oil
                                        <span><i class="fa fa-arrow-right"></i></span></a>
                                </li>
                                <li>
                                    <a style="color:white" href="{{ url('/about_dana_trac') }}">Danatrac Limited
                                        <span><i
                                                class="fa fa-arrow-right"></i></span></a>
                                </li>
                                <li>
                                    <a style="color:white" href="{{ url('/about_terotech') }}">Terotech Construction
                                        <span><i class="fa fa-arrow-right"></i></span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="widget widget_download">
                            <h4 class="widget-title">
                                Contact Terotech
                                <span class="dot"></span>
                            </h4>
                            <div class="quote-wrap ms-xl-12" style="background: #ff8a00">
                                {{--  <h4 class="mb-4">Contact Dana Services</h4> --}}
                                <div class="single-input-inner style-bg border-radius-5">
                                    <input type="text" placeholder="Your Name"/>
                                </div>
                                <div class="single-input-inner style-bg border-radius-5">
                                    <input type="text" placeholder="Your Name"/>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
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
        </div>
    </div>
    <!-- service area end -->
@endsection
