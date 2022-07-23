<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sellbook;
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
       $donatebooks=donatebook::where('status','Approved')->get();
       return view('frontend.product_page.getdonate',compact('donatebooks'));
   }
   public function earnpoint(){
       $requestbooks=requestbook::all();
       return view('frontend.product_page.earnpoint',compact('requestbooks'));
   }
}
