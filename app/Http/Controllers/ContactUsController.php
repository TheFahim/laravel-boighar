<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
      
        $contacts=contactus::all();
        return view('backend.contacts.contacts',compact('contacts'));
    }
    
    public function create(){
        return view('frontend.more_page.contactus');
    }
    
    public function store(ContactUsRequest $request){
             
        
       ContactUs::create([
     
        'fullname'=>$request->fullname,
        'email'=> $request->email,
        'mobile'=> $request->mobile,
        'message'=>$request->message,
        
       ]
       );
       return redirect()->route('contacts.create')->withMessage('Successfully submitted');
    }

    

    public function show($contactus)
    {
          
         $contactusshow=contactus::findOrFail($contactus);
         return view('backend.contacts.show',compact('contactsshow'));
             
    }

    public function destroy(Request $request)
    {
          $contactusshow=contactus::findOrFail($request->contactus)->delete();
          return redirect()->route('backend.contacts.index')->withMessage('Successfully Data Deleted');       
    }
}
