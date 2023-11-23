<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function about_dana()
    {
        return view('about_dana');
    }

    public function about_dana_services()
    {
        return view('dana_services.about');
    }

    public function about_dana_oil()
    {
        return view('dana_oil.about');
    }
    public function about_dana_oil_products()
    {
        return view('dana_oil.about_dana_oil_products');
    }

    public function about_dana_trac()
    {
        return view('dana_trac.about');
    }
    public function about_dana_trac_products()
    {
        return view('dana_trac.about_dana_trac_products');
    }

    public function about_terotech()
    {
        return view('terotech.about');
    }
    public function about_terotech_key_accounts()
    {
        return view('terotech.about_terotech_key_accounts');
    }
}
