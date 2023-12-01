@extends('layouts.website')

@section('content')
    <div class="breadcrumb-area bg-overlay-2"
         style="background-image: url('{{ asset('assets/img/home-3/DANA GROUP BANNERS Corrections-03.jpg') }}');margin-top:130px;">
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
                        <h2>DANA SERVICES</h2>
                        <p style="color:black;">
                            Since its inception in the early 1980s, Dana Services Limited has been a vanguard of
                            industrial
                            and commercial innovation. Incorporated in 1990, our journey has been marked by rapid growth
                            fuelled by a commitment to innovation and diversification. As a wholly Zambian-owned entity,
                            we
                            are deeply rooted in the local economy, yet our reach and impact extend across borders.
                        </p>
                        <p style="color:black;">
                            Dana Services Limited boasts expansive expertise in trading, supplying tractors, generators,
                            water pumps, valves, and other water reticulation accessories. We have honed our operational
                            capabilities to serve the mining sector with major equipment assemblies, demonstrating our
                            capacity to cater to intensive industrial demands.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('stratbanner.jpg') }}">
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <h4 class="subtitle">Strategic Alliances</h4>
                                <p style="color:black;" class="last-para">
                                    We pride ourselves on exclusive partnerships that make us the sole distributors in
                                    Zambia
                                    for internationally recognized brands such as:</p><br/>
                                <ul class="list-inner-wrap">
                                    <li>New Holland – Renowned for heavy equipment.</li>
                                    <li>Baldwin Filters – Leaders in the filtration industry</li>
                                    <li>Euracom – Pioneers in armoured car and bullion truck manufacturing from Germany.
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <hr/>
                        <h4 class="subtitle">Operational Excellence</h4>
                        <p style="color:black;">
                            Our operations are backed by a professional workforce exceeding 110 individuals, ranging
                            from
                            business managers, engineers, supply chain experts, to technicians. Together, they ensure
                            the
                            highest standards of product handling and distribution efficiency.
                        </p>

                        <hr/>
                        <h4 class="subtitle">Major Projects and Customers</h4>

                        <p style="color:black;" class="last-para">
                            Dana Services Limited has cultivated a prestigious clientele, including Konkola Copper
                            Mines,
                            the American Embassy, and Zambia Forestry Company, among others. Our key assignments include
                            supplying heavy equipment to Zambia Sugar and a five-year service contract with KCM,
                            illustrating our capacity for large-scale and long-term engagements.
                        </p>

                        <hr/>
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <h4 class="subtitle">After Sales Service</h4>
                                <p style="color:black;" class="last-para">
                                    Our commitment to customer satisfaction extends beyond sales. We offer world-class
                                    after-sales services to ensure prolonged equipment life and maximum value. Our
                                    services
                                    include:</p><br/>
                                <ul class="list-inner-wrap">
                                    <li>Warranty Coverage: 1,500 hours or one year, whichever comes first.</li>
                                    <li>Service Intervals: Comprehensive servicing at 250, 500, and 1,000 hours.</li>
                                    <li>Ongoing Support: Regular visits to check on machinery, even post-warranty.</li>
                                    <li>Maintenance Contracts: Available for the entire lifespan of the machines.</li>
                                </ul>

                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('stratbanner.jpg') }}">
                            </div>
                        </div>
                        <hr/>
                        <h4 class="subtitle">Parts Supply and Logistics</h4>

                        <p style="color:black;" class="last-para">
                            Our warehouses in Lusaka, the Copperbelt, and Mazabuka are always stocked, minimizing
                            machine
                            downtime due to part shortages. For parts not immediately available, our expedited supply
                            chain
                            ensures a rapid turnaround, with DHL courier services delivering within five days, air
                            freight
                            within eight days, and sea freight within 30 days.
                        </p>
                        <br/>

                        <p style="color:black;" class="last-para">
                            For a detailed look at our spares, parts, and associated pricing, please refer to our
                            attached
                            schedule. During the warranty period, we do not charge for labor.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="background-color:  light-grey" class="sidebar-area">
                        <div style="background: #cb0308" class="widget widget_catagory">
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
                                Contact Dana Services
                                <span class="dot"></span>
                            </h4>
                            <div class="quote-wrap ms-xl-12" style="background: #cb0308">
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
