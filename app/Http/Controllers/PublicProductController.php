<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sellbook;
use App\Models\Earnpoint;
 
use App\Models\requestbook;
use App\Models\donatebook;
class PublicProductController extends Controller
{
   public function bestbook(){
       return view('frontend.product_page.best_sellbook');
   }
   public function newcollection(){
       return view('frontend.product_page.new_collectionbook');
   }
   public function oldbook(){
       $sellbooks=sellbook::where('status','Approved')->get();
       return view('frontend.product_page.oldbook',compact('sellbooks'));
   }
   public function getdonate(){
       $donatebooks=donatebook::all();
       return view('frontend.product_page.getdonate',compact('donatebooks'));
   }
   public function earnpoint(){

       $requestbooks=requestbook::all();
       $earn_orders=Earnpoint::all();
       return view('frontend.product_page.earnpoint',compact('requestbooks','earn_orders'));
   }
   public function store(Request $request){

    Earnpoint::create([
        'delivery_date'=>$request->delivery_date,
        'message'=>$request->message,
        'user_id'=>$request->user_id,
        'book_id'=>$request->book_id,
        
    ]
   );
   return redirect()->route('earnpoint')->withMessage('Successfully submitted your order after varication we confirm you please wait');
 
   }
}
