<?php

namespace App\Http\Controllers;
use App\Models\Faq;
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
        $faqs=Faq::all();
        return view('frontend.more_page.faq',compact('faqs'));
    }
    public function events()
    {
        return view('frontend.more_page.events');
    }
}
