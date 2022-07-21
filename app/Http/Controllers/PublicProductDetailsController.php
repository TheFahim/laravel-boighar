<?php

namespace App\Http\Controllers;

use App\Models\Donet;
use App\Models\sellbook;
use App\Models\donatebook;
use Illuminate\Http\Request;

class PublicProductDetailsController extends Controller
{
    //
    public function bookdetails($bookdetail)
    {
        $bookdetail = sellbook::findOrFail($bookdetail);
        return view('frontend.product_details.book_details', compact('bookdetail'));
    }
    public function donetbookdetails($donetbookdetails)
    {
        $bookdetail = donatebook::findOrFail($donetbookdetails);
        return view('frontend.product_details.donate_book_details', compact('bookdetail'));
    }

    // 
    // public function donetsrequest(Request $request ,$donet){
    //     dd($request);
    //     $donet = donatebook::findOrFail($donet);
    //     Donet::create([

    //         'fullname'=>$request->fullname,
    //         'email'=> $request->email,
    //         'address'=> $request->address,
    //         'mobile'=> $request->mobile,
    //         'Request_reason'=> $request->Request_reason,
    //         'book_id'=>$donet->id,
    //         'Book_name'=>$donet->booktitle

    //        ]
    //        );
    //        return redirect()->route('donets.request')->withMessage('Successfully ');
    //     }


    public function cart($cart)
    {
        $cart = sellbook::findOrFail($cart);
        return view('frontend.product_details.cart', compact('cart'));
    }
    public function payment($pay)
    {
        $pay = sellbook::findOrFail($pay);
        return view('frontend.product_details.payment', compact('pay'));
    }
}
