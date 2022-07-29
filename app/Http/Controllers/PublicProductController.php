<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\sellbook;
use App\Models\donatebook;
use App\Models\requestbook;
use Illuminate\Http\Request;

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
       $banner=Banner::where('is_active',true)->where('option','Earn point')->latest()->first();
       return view('frontend.product_page.earnpoint',compact('requestbooks','banner'));
   }
}

