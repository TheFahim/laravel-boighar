<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use App\Models\Event;
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
    public function upcomingEvent()
    { 
        $events=Event::all();
        return view('frontend.more_page.upcomingEvent',compact('events'));
    }
    public function eventDetails($id)
    { 
        $event=Event::findOrFail($id);
        return view('frontend.more_page.eventDetails',compact('event'));
    }
}
