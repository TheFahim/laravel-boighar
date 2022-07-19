<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sellbook;
use App\Models\requestbook;
class PublicProductController extends Controller
{
   public function bestbook(){
       return view('frontend.product_page.best_sellbook');
   }
   public function newcollection(){
       return view('frontend.product_page.new_collectionbook');
   }
   public function oldbook(){
       $sellbooks=sellbook::all();
       return view('frontend.product_page.oldbook',compact('sellbooks'));
   }
   public function getdonate(){
       return view('frontend.product_page.getdonate');
   }
   public function earnpoint(){
       $requestbooks=requestbook::all();
       return view('frontend.product_page.earnpoint',compact('requestbooks'));
   }
}