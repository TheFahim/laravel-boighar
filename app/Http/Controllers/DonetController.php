<?php

namespace App\Http\Controllers;

use App\Models\Donet;
use App\Models\donatebook;
use Illuminate\Http\Request;

class DonetController extends Controller
{
    public function Drequest($donet)
    {
         
        $donet = donatebook::findOrFail($donet);
        return view('frontend.book_form.donaterequest',compact('donet'));
    }

    public function store (Request $request)
    {
dd($_POST);
    }






    public function destroy(Donet $donet)
    {
        //
    }
}
