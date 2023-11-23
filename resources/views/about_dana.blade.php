@extends('layouts.website')

@section('content')
    <div class="breadcrumb-area bg-overlay-2"
        style="background-image: url('{{ asset('assets/img/home-3/DANA GROUP BANNERS Corrections-06.jpg') }}');margin-top:130px;">
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
                        <h2>DANA GROUP</h2>
                        <p style="color:black;">
                            Dana Holdings, rooted in the vibrant heart of Zambia's economy since 1997, operates from its
                            Lusaka headquarters as an influential indigenous conglomerate. With a multifaceted portfolio
                            that spans critical sectors of the economy, we are dedicated to fostering growth, innovation,
                            and sustainable development.
                        </p>
                        <p style="color:black;">
                            Dana Holdings synergizes the operations of its brands, each a leader in its field—Dana Services,
                            Dana Oil, Danatrac Limited, and Terotech Construction. We are a beacon of excellence, with a
                            strategic focus on sectors that include mining support, agriculture, energy, and construction,
                            ensuring we play a pivotal role in Zambia's growth.
                        </p>
                        <div class="row">

                            <div class="col-lg-12 align-self-center">
                                <h4 class="subtitle">Our Core Values</h4>
                                <ul class="list-inner-wrap">
                                    <li>Innovation: Fostering a culture of creativity and continuous improvement across our
                                        brands.</li>
                                    <li>Sustainability: Committing to responsible practices that ensure the well-being of
                                        our environment and communities.</li>
                                    <li>Excellence: Delivering the highest standard in all our endeavours and services.</li>
                                    <li>Integrity: Maintaining transparency and ethical conduct in all our business
                                        dealings.</li>
                                    <li>Collaboration: Building synergistic partnerships that drive collective success.</li>

                                </ul>
                            </div>
                        </div>
                        <hr />
                        <h4 class="subtitle">How It Works</h4>
                        <p style="color:black;">
                            Our guiding principle, 'Innovation through Diversity,' encapsulates our approach to business.
                            It's this diversity that drives us, harnessing the unique strengths of our brands to foster
                            resilience, adaptability, and market leadership.
                        </p>

                        <hr />
                        <h4 class="subtitle">International Partnerships</h4>

                        <p style="color:black;" class="last-para">
                            Dana Holdings is proud to collaborate with globally recognized partners, enhancing our offerings
                            with their world-class standards. These alliances not only reinforce our commitment to quality
                            but also enable us to bring advanced technologies and best practices to the Zambian market. Our
                            exclusive partnerships with industry giants such as New Holland for agricultural equipment,
                            Castrol for lubricants, and Baldwin Filters signify our international reach and local dominance.
                        </p>

                        <hr />
                        <h4 class="subtitle">Sustainability Initiatives</h4>

                        <p style="color:black;" class="last-para">
                            Dana Holdings integrates sustainable practices across its operations, reflecting our commitment
                            to the environment. We prioritize green initiatives, resource conservation, and support
                            eco-innovations within our brands. Our goal is to lead by example, showcasing how responsible
                            business practices can go hand-in-hand with economic success.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="background-color:  light-grey" class="sidebar-area">

                        <div class="widget widget_catagory">
                            <h4 class="widget-title">
                                OUR BRANDS
                                <span class="dot"></span>
                            </h4>
                            <ul class="catagory-items">
                                <li>
                                    <a href="{{ url('/about_dana_services') }}">Dana Services
                                        <span><i class="fa fa-arrow-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/about_dana_oil') }}">Dana Oil
                                        <span><i class="fa fa-arrow-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/about_dana_trac') }}">Danatrac Limited <span><i class="fa fa-arrow-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/about_terotech') }}">Terotech Construction
                                        <span><i class="fa fa-arrow-right"></i></span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="widget widget_download">
                            <h4 class="widget-title">
                                DOWNLOAD BROCHURE
                                <span class="dot"></span>
                            </h4>
                            <ul class="download-items">
                                <li>
                                    <a href="#">
                                        <i class="far fa-file-pdf"></i> DOWNLOAD PROFILE</a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
@endsection
