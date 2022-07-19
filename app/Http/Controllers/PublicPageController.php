<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    //
    public function aboutus()
    {
        return view('frontend.more_page.aboutus');
    }
    public function contactus()
    {
        return view('frontend.more_page.contactus');
    }
    public function faq()
    {
        return view('frontend.more_page.faq');
    }
    public function events()
    {
        return view('frontend.more_page.events');
    }
}
