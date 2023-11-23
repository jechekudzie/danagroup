@extends('layouts.website')

@section('content')
    <div class="breadcrumb-area bg-overlay-2"
        style="background-image: url('{{ asset('assets/img/home-3/DANA GROUP BANNERS Corrections-02.jpg') }}');margin-top:130px;">
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
                        <h2>DANA OIL - PRODUCTS</h2>

                        <h4 class="subtitle">Product Excellence</h4>
                        <p style="color:black;">
                            Our automotive and industrial lubricant lines are crafted to meet the rigorous demands of their
                            respective fields:
                        </p>

                        <div class="row">

                            <div class="col-lg-12 align-self-center">
                                <h4 class="subtitle">Automotive Lubricants</h4>
                                <p style="color:black;" class="last-para">
                                    Engine oils, transmission fluids, specialty products such as brake fluids and coolants,
                                    and greases for various vehicles including motorcycles and boats:</p><br />
                                <ul class="list-inner-wrap">
                                    <li>Engine, Axle and Transmission Fluids</li>
                                    <li>Motor Cycle lubricants</li>
                                    <li>Specialities-Brake fluids, Coolants</li>
                                    <li>Boating lubricants</li>
                                    <li>Agriculture lubricants</li>
                                    <li>Forestry lubricants</li>
                                    <li>Automotive greases</li>
                                </ul>


                            </div>
                        </div>

                        <hr />
                        <div class="row">

                            <div class="col-lg-12 align-self-center">
                                <h4 class="subtitle">Industrial Lubricants</h4>
                                <p style="color:black;" class="last-para">
                                    High-performance oils and greases for turbines, compressors, hydraulics, gear systems,
                                    and more, alongside specialty products for sectors like sugar milling and metalworking.
                                </p><br />
                                <ul class="list-inner-wrap">
                                    <li>Transformer (Insulating) Oil</li>
                                    <li>Turbine Oils</li>
                                    <li>Compressor and Refrigeration Oils</li>
                                    <li>Hydraulic lubricants</li>
                                    <li>Industrial Gear Oils</li>
                                    <li>Sugar Mill lubricants</li>
                                    <li>Wire Rope lubricants</li>
                                    <li>Metal Working lubricants</li>
                                    <li>Rockdrill lubricants</li>
                                </ul>


                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div style="background-color:  light-grey" class="sidebar-area">

                        <div style="background: #014abb" class="widget widget_catagory">
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
                                    <a style="color:white" href="{{ url('/about_dana_trac') }}">Danatrac Limited <span><i
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
                                Contact Dana Oil
                                <span class="dot"></span>
                            </h4>
                            <div class="quote-wrap ms-xl-12" style="background: #014abb">
                                {{--  <h4 class="mb-4">Contact Dana Services</h4> --}}
                                <div class="single-input-inner style-bg border-radius-5">
                                    <input type="text" placeholder="Your Name" />
                                </div>
                                <div class="single-input-inner style-bg border-radius-5">
                                    <input type="text" placeholder="Your Name" />
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
