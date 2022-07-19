<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sellbook;
class PublicProductDetailsController extends Controller
{
    //
    public function bookdetails($bookdetail)
    {
        $bookdetail=sellbook::findOrFail($bookdetail);
        return view('frontend.product_details.book_details',compact('bookdetail'));
    }
    public function cart($cart)
    { 
        $cart=sellbook::findOrFail($cart);
        return view('frontend.product_details.cart',compact('cart'));
    }
    public function payment($pay)
    { 
        $pay=sellbook::findOrFail($pay);
        return view('frontend.product_details.payment',compact('pay'));
    }
}
