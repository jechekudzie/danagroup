@extends('layouts.website')

@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
@endpush

@section('content')
    {{-- <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style> --}}


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
                        <h2 style="color:#ff8a00">KEY ACCOUNTS</h2>
                        <p style="color:black;">
                            Our key accounts and projects, ranging from sewerage systems to
                            residential and commercial constructions, showcase our capability to handle diverse and complex
                            projects.
                        </p>
                        <hr />

                        <table id="example" class="display cell-border" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ITEM</th>
                                    <th>DESCRIPTION</th>
                                    <th>VALUE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>NAPSA Sewerage</td>
                                    <td>K 105 Million</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Construction of residence for Chairman for Dana Holdings Limited</td>
                                    <td>K 300 Million</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Building office for Dana Holdings LTD for Chandwe Musonda Road</td>
                                    <td>K 1.2 Billion</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Water Reticulation project at Nakambala sugar</td>
                                    <td>US $156,000.00</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>ZESCO – Construction of Septic Tanks and Soak ways</td>
                                    <td>K 120 Million</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Chilanga Cement – Sewerage Works</td>
                                    <td>K 50 Million</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Laboratory rehabilitation for National Institute for Scientific and Industrial
                                        research</td>
                                    <td>US $70,000.00</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Rehabilitation of Sewerage System for American Embassy</td>
                                    <td>US $30,000.00</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Rehabilitation of Houses for American Embassy</td>
                                    <td>K 96,000.00</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Installation of Generator Sets and air conditions – American Embassy</td>
                                    <td>US $23,000.00</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Rehabilitation of offices – American Embassy</td>
                                    <td>K 120 Million</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Renovation of Lodge Serenity Lodge</td>
                                    <td>K 162 Million</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>World Vision office Renovation</td>
                                    <td>K 121 Million</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Shop Dividing – Manda Hill</td>
                                    <td>K 20 Million</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Construction of Workshop and New offices for DANA TRAC Ltd</td>
                                    <td>K 2.1 Million</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Construction of offices and Drainage for Care International</td>
                                    <td>K 124 Million</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Construction of CELTEL outlet along Cairo Road and at Head office</td>
                                    <td>K 56 Million</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Rehabilitation of 85 Houses for Zambia Sugar Company</td>
                                    <td>K 412 Million</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Construction of CELTEL Farm House</td>
                                    <td>K 176 Million</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Rehabilitation works at MANDA HILL</td>
                                    <td>K 160 Million</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Rehabilitation works of the damaged roof at Electoral Commission of Zambia Head
                                        offices - Lusaka</td>
                                    <td>K 45 Million</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Construction of a Three Bed-roomed House for CELTEL</td>
                                    <td>K 402 Million</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Rehabilitation of 20 Houses in Kamwala for Zambia Sugar Company</td>
                                    <td>K 98 Million</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Rehabilitation of Luanshya Trades for the Ministry of Science and Technology</td>
                                    <td>K 650 Million</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Construction of 5 Bed – roomed House for Bishop Banda</td>
                                    <td>K 320 Million</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Construction of Two High Cost houses for NHA</td>
                                    <td>K 500 Million</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Construction of ZAMTAN Community clinic, in Kitwe for World Vision</td>
                                    <td>K 1.0 Billion</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Construction of 4 no Celtel Communication towers (subcontracted by Plessey (Z) Ltd)
                                    </td>
                                    <td>K 600 Million</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Construction of Staff Houses at ZAMTAN Clinic in Kitwe for World Vision Zambia</td>
                                    <td>K 800 Million</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Rehabilitation of CELTEL sales outlet in MANSA</td>
                                    <td>K 280 Million</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Collection of Debris and Sewerage services – American Embassy</td>
                                    <td>K 140 Million</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Sewerage Tanker Services</td>
                                    <td>K 180 Million</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Rehabilitation of Flats in Makeni Villas for Madison Investment Limited</td>
                                    <td>K 76 Million</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Construction of KCM clinic in Kitwe for KCM Nkana</td>
                                    <td>US $249,955.92</td>
                                </tr>
                            </tbody>
                        </table>


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
                                Contact Terotech
                                <span class="dot"></span>
                            </h4>
                            <div class="quote-wrap ms-xl-12" style="background: #ff8a00">
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

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    @endpush
@endsection
