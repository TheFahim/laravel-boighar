<?php

namespace App\Http\Controllers;
use App\Models\carousel;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $carousels=carousel::all();
        return view('frontend.home',compact('carousels'));
    }
  
    
    
}
