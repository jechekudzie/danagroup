@extends('layouts.website')

@section('content')
    <div class="breadcrumb-area bg-overlay-2"
        style="background-image: url('{{ asset('assets/img/home-3/DANA GROUP BANNERS Corrections-04.jpg') }}');margin-top:130px;">
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
                        <h2 style="color:#0560ed">DANATRAC - Our Heritage</h2>
                        <p style="color:black;">
                            Founded in the year 2000, Danatrac Limited has grown to become a cornerstone of Zambia's
                            agro-business sector. With a market share that peaked at around 60% during the 2004/2005
                            financial year, we have positioned ourselves as leaders, innovators, and trusted partners to the
                            farming community. As a proud member of the Dana Group of Companies, we stand on a legacy of
                            quality, customer satisfaction, and market leadership
                        </p>
                        <p style="color:black;">
                            Our journey has been marked by strategic partnerships and a keen eye for the needs of the
                            agricultural sector. From our early associations with renowned tractor brands to our current
                            exclusive dealership with New Holland Agriculture, Danatrac has consistently evolved to meet and
                            exceed market demands.
                        </p>

                        <hr />
                        <h4 style="color:#87cc19" class="subtitle">Vision and Mission</h4>
                        <p style="color:black;">
                            Our vision is clear – to be the preferred supplier of tractors and agricultural equipment in
                            Zambia, achieving unrivaled market leadership and a robust return on investment. Our values are
                            centered on customer satisfaction, honoring commitments to suppliers and financiers, and
                            upholding our corporate social responsibilities.
                        </p>

                        <hr />
                        <h4 style="color:#f8a92f" class="subtitle">Success Factors</h4>
                        <p style="color:black;">
                            We attribute our success to divine favor, a keen monitoring of our product lines, exceptional
                            after-sale service, a comprehensive customer database, and a highly motivated and well-equipped
                            workforce. Our commitment to corporate integrity, customer service, and industry leadership is
                            unwavering.
                        </p>

                        <hr />
                        <h4 style="color:#87cc19" class="subtitle">Desired Future Position</h4>
                        <p style="color:black;">
                            With ambitious goals, we envision Danatrac as the market leader in tractor sales and customer
                            appreciation by 2017. Our strategic plan includes expanding our reach within Zambia and
                            negotiating better terms with our suppliers to offer the most competitive prices in the market.
                        </p>


                        <hr />
                        <h4 style="color:#f8a92f" class="subtitle">Product Portfolio</h4>
                        <p style="color:black;">
                            Our diverse range of products, including tractors, spares, implements, and agro-inputs, caters
                            to a wide spectrum of clients from farmers to municipalities and government entities. With New
                            Holland's global presence, we offer world-class machinery backed by a reliable fleet and skilled
                            technicians.... <a style="color: #0560ed" href="{{ url('/about_dana_trac_products') }}">Read More....</a>
                        </p>

                        <hr />
                        <h4 style="color:#87cc19" class="subtitle">Banking and Legal Advisors</h4>
                        <p style="color:black;">
                            We are supported by reputable financial and legal advisors, ensuring that our business
                            operations are sound and secure.
                        </p>

                        <hr />
                        <h4 style="color:#f8a92f" class="subtitle">Strategic Alliances and Governance</h4>
                        <p style="color:black;">
                            Our alliances with global leaders like Case New Holland, Sfogia of Italy, and Field King of
                            India, empower us to be a one-stop shop for the farming community. Our future is geared towards
                            innovation, market expansion, and continued excellence in agribusiness.
                        </p>

                        <p style="color:black;">
                            Our governance structure is spearheaded by our esteemed board members, Mr. David Nama, Chairman
                            and CEO, and Mrs. Joyce B. Nama, Executive Director, who bring a wealth of experience and
                            leadership to our operations.
                        </p>

                        <hr />
                        <div class="row">

                            <div class="col-lg-12 align-self-center">
                                <h4 style="color:#0560ed" class="subtitle">Danatrac At a Glance</h4>

                                <ul class="list-inner-wrap">
                                    <li>Establishment: December 2000</li>
                                    <li>Employees: 22</li>
                                    <li>Presence: Strategic locations across Zambia, offering services to customers in their
                                        specific zones.</li>
                                    <li>Key Assignments: Delivery of over 150 New Holland tractors and other agricultural
                                        machinery to prominent clients within a year.</li>
                                </ul>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="col-lg-4">
                    <div style="background-color:  light-grey" class="sidebar-area">

                        <div style="background: #f8a92f" class="widget widget_catagory">
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
                            <div class="quote-wrap ms-xl-12" style="background: #f8a92f">
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
