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

                        <hr />
                        <h4 style="color:#0560ed" class="subtitle">Products Portfolio</h4>
                        <p style="color:black;">
                            Our diverse range of products, including tractors, spares, implements, and agro-inputs, caters
                            to a wide spectrum of clients from farmers to municipalities and government entities. With New
                            Holland's global presence, we offer world-class machinery backed by a reliable fleet and skilled
                            technicians.
                        </p>

                        <p style="color:black;">
                            In just over two years of operation, Danatrac has leveraged the robust legacy of New Holland to
                            ascend rapidly within the market. From a standing start, we have surged to second place, with a
                            clear trajectory to become the market leader by 2017. Having integrated the esteemed Ford and
                            Fiat tractor models, New Holland boasts a formidable global presence with production facilities
                            in more than twenty countries
                        </p>
                        <p style="color:black;">
                            Our partnership with Danatrac has been instrumental in delivering substantial volumes of
                            tractors to esteemed clients such as ZAFFICO, Zambia Sugar Plc, Nanga Farms, and the
                            enterprising individuals within the Kaleya Small Holders and Mkushi Farming block.
                        </p>
                        <p style="color:black;">
                            Danatrac's commitment to excellence is mirrored in our expansive and dependable fleet of field
                            vehicles, bolstered by a team of highly skilled mechanics. This ensures that we can swiftly
                            respond to our customers’ service needs and concerns, guaranteeing a response time within two
                            hours of notification. Our dedication to responsive customer service and robust support
                            infrastructure underscores Danatrac's standing as a reliable partner for agricultural machinery
                            across Zambia.
                        </p>

                        <hr />
                        <h4 style="color:#87cc19" class="subtitle">Strategic Alliances </h4>
                        <p style="color:black;">
                            Our alliances with global leaders like Case New Holland, Sfogia of Italy, and Field King of
                            India, empower us to be a one-stop shop for the farming community. Our future is geared towards
                            innovation, market expansion, and continued excellence in agribusiness.
                        </p>



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
