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
                        <h2 style="color:#669f05">DANA OIL</h2>
                        <p style="color:black;">
                            Dana Oil Corporation Limited, a valued member of the Dana Holdings family, serves as the
                            exclusive distributor for Castrol and BP lubricants within Zambia. Established as Danatech
                            Investments and rebranded in 2006, our indigenous Zambian company has soared to become a leader
                            in oil marketing, guided by the seasoned expertise of Dr. David Nama, Chairman & CEO, and Mrs.
                            Joyce Nama, Executive Director.
                        </p>
                        <p style="color:black;">
                            As guardians of internationally acclaimed Castrol and BP lubricants, we pledge unparalleled
                            quality and innovation in our product offerings. Our extensive range covers the needs of
                            automobiles, industries, and specialty applications, ensuring that every lubricant need is not
                            just met, but exceeded.
                        </p>

                        <hr />
                        <h4 style="color:#014abb" class="subtitle">Commitment to Quality</h4>
                        <p style="color:black;">
                            As guardians of internationally acclaimed Castrol and BP lubricants, we pledge unparalleled
                            quality and innovation in our product offerings. Our extensive range covers the needs of
                            automobiles, industries, and specialty applications, ensuring that every lubricant need is not
                            just met, but exceeded
                        </p>

                        <hr />
                        <h4 style="color:#669f05" class="subtitle">Delivery and Support</h4>
                        <p style="color:black;">
                            Understanding the essence of timely supply, Dana Oil ensures product delivery within 24 hours of
                            order receipt. Our technical and sales support services are bolstered by a diverse team of
                            professionals and the backing of Puma Energy and Castrol South Africa.
                        </p>

                        <hr />
                        <h4 style="color:#014abb" class="subtitle">Unmatched Availability</h4>
                        <p style="color:black;">
                            Our commitment to maintaining a robust stock in our depots, in compliance with ISO 9002 quality
                            controls, guarantees product availability that aligns with your business requirements,
                            bolstering your operations with dependability and excellence.
                        </p>


                        <hr />
                        <h4  style="color:#669f05" class="subtitle">Beyond Products</h4>
                        <p style="color:black;">
                            We’re not just about the supply of premium lubricants; Dana Oil is invested in the full
                            lifecycle of our products. From consignment stocking for instant availability to the
                            installation of bulk tanks and the provision of technical training and plant surveys, we stand
                            by our customers every step of the way.
                        </p>


                        <hr />
                        <h4 style="color:#014abb" class="subtitle">Environmental Responsibility</h4>
                        <p style="color:black;">
                            In line with our environmental commitment, we facilitate the disposal of used oil through
                            registered third-party handlers, ensuring a seamless and responsible end-to-end service for our
                            clients.
                        </p>

                        <hr />
                        <h4 style="color:#669f05" class="subtitle">Transparency, Trust and Our Promise</h4>
                        <p style="color:black;">
                            Dana Oil Corporation Limited values honesty and clarity in our offerings, advising customers
                            proactively of any product deviations or alternatives, and backing our quality with a solid
                            warranty.
                        </p>

                        <p style="color:black;">
                            Aligning with Dana Dana Group’s  philosophy, Dana Oil is a testament to innovation, quality, and
                            customer-first service. We take pride in not only meeting but anticipating the needs of our
                            esteemed clients, fostering relationships built on trust and excellence
                        </p>



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
